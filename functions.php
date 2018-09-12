<?php

if (!isset($content_width)) {
    $content_width = 790;
}

/**
 * テーマの基本を設定する
 *
 * @return void
 */
function custom_theme_setup() {
    add_theme_support('title-tag');                                                                            // タイトルタグを自動で出力する
    add_theme_support('automatic-feed-link');                                                                  // ヘッダーにRSSのリンクを出力する
    add_theme_support('post-thumbnails');                                                                      // アイキャッチ画像のサイズ'post-thumbnail'という名前で適用する
    set_post_thumbnail_size(790, 300, true);                                                                   // 'post-thumbnail'のサイズを指定する
    add_image_size('large-thumbnail', 1090, 330, true);                                                        // アイキャッチ画像のサイズに'large-thumbnail'を適用する
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));    // 出力されるマークアップをHTMLに設定
    add_editor_style( array( 'css/editor-style.css' ) );                                                       // 管理画面の投稿画面に適用するcssをここで指定する
    add_theme_support('menus');                                                                                // カスタムメニューを有効化
    register_nav_menus(array('ヘッダーナビゲーション', 'フッターナビゲーション'));                             // テーマの位置を定義
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * cssとjsの読み込み
 *
 * @return void
 */
function css_js_scripts_reader() {
    // bootstrapのcssを読み込み
    // サイト用のcssの読み込み
    // wordpressテーマを定義するためだけのcssの読み込み
    // fontawesomeのcssの読み込み
    // デフォルトで読み込まれるjQueryをリセットする
    // jQueryの読み込み
    // bootstrapのjsを読み込み
    // サイト用のjsの読み込み
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', array(), '4.1.3');                // bootstrapのcssを読み込み
    wp_enqueue_style('sampleCafe-style', get_stylesheet_uri(), array(), '1');                                              // wordpressテーマを定義するためだけのcssの読み込み
    wp_enqueue_style('fontawesome-style', get_template_directory_uri().'/css/all.css', array(), '5.3.1');                  // fontawesomeのcssの読み込み
    wp_enqueue_style('sampleCafe-css', get_template_directory_uri().'/css/app.css', array(), '1');                         // サイト用のcssの読み込み
    wp_deregister_script('jquery');                                                                                        // デフォルトで読み込まれるjQueryをリセットする
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), '3.3.1', true);           // jQueryの読み込み
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '4.1.3', true);    // bootstrapのjsを読み込み
    wp_enqueue_script('sampleCafe-js', get_template_directory_uri().'/js/app.js', array(), '1', true);                     // サイト用のjsの読み込み
}
add_action('wp_enqueue_scripts', 'css_js_scripts_reader');

/**
 * the_excerpt()メソッドで抜粋した文の末尾の文字を変更する
 *
 * @return string
 */
function wp_excerpt_more() {
    return ' ...';
}
add_filter('excerpt_more', 'wp_excerpt_more');

/**
 * サイドバーウィジェットを定義する
 *
 * @return void
 */
function custom_widgets_init() {
    register_sidebar(array(
        'name'          => 'サイドバーウィジェットエリア',
        'id'            => 'sidebar-widget-area',
        'description'   => 'サイドバーのウィジェットエリア',
        'before_widget' => '<div class="card mb-3 rounded-0">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="card-header rounded-0" style="width: 100%">',
        'after_title'   => '</div>',
    ));
}
add_action('widgets_init', 'custom_widgets_init');
