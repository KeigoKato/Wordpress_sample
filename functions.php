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
    add_image_size('small-thumbnail', 200, 200, true);                                                         // アイキャッチ画像のサイズに'small-thumbnail'を適用する
    add_image_size('middle-thumbnail', 300, 300, true);                                                        // アイキャッチ画像のサイズに'middle-thumbnail'を適用する
    add_image_size('staffs-thumbnail', 140, 140, true);                                                        // アイキャッチ画像のサイズに'staffs-thumbnail'を適用する
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));    // 出力されるマークアップをHTMLに設定
    add_editor_style( array( 'css/editor-style.css' ) );                                                       // 管理画面の投稿画面に適用するcssをここで指定する
    // register_nav_menus(array(                                                                                  // カスタムメニューを追加
    //     'header_nav' => 'ヘッダーナビゲーション',
    //     'footer_nav' => 'フッターナビゲーション',
    // ));
}
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * cssとjsの読み込み
 *
 * @return void
 */
function css_js_scripts_reader() {
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

/**
 * カスタム投稿タイプとカスタムフィールドを追加する
 *
 * @return void
 */
function custom_register_post_type() {
    $args_menus = array(
        'label'        => 'メニュー 一覧',                                           // カスタム投稿タイプのラベルを指定する
        'hierarchical' => false,
        'public'       => true,
        'has_archive'  => true,                                                      // アーカイブページを持たせる
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),    // タイトルと本文欄とアイキャッチ画像とカスタムフィールドを有効にする
        'rewrite'      => array('with_front' => false),                              // http://localhost:8888/wordpress/menusというパーマリンクに設定
    );
    register_post_type('menus', $args_menus);                                        // 'menus'というスラッグ名でカスタム投稿タイプを登録する

    $args_staffs = array(
        'labels'        => array(
            'name'          => 'スタッフ一覧',                             // 管理画面に表示する名前を指定する
            'add_new_item'  => '新しいスタッフ情報を入力してください',     // 新規作成ページのタイトルに表示される名前
            'add_new'       => '新しいスタッフを追加',                     // メニューの新規追加ボタンのラベル
            'edit_item'     => '編集',                                     // 編集ページのタイトルに表示される名前
            'view_item'     => '編集',                                     // 編集ページの「投稿を表示」ボタンのラベル
            'search_items'  => 'コラムの検索',                             // 一覧ページの検索ボタンのラベル
            'not_found'     => '見つかりません。',                         // 一覧ページに投稿が見つからなかったときに表示
            'not_found_in_trash' => 'ゴミ箱にはありません。'               // ゴミ箱に何も入っていないときに表示
        ),
        'hierarchical' => false,
        'public'       => true,
        'has_archive'  => true,                                            // アーカイブページを持たせる
        'supports'     => array('title', 'thumbnail', 'custom-fields'),    // タイトルと本文欄とアイキャッチ画像とカスタムフィールドを有効にする
        'rewrite'      => array('with_front' => false),                    // http://localhost:8888/wordpress/menusというパーマリンクに設定
    );
    register_post_type('staffs', $args_staffs);                            // 'menus'というスラッグ名でカスタム投稿タイプを登録する
}
add_action('init', 'custom_register_post_type');

/**
 * menus投稿タイプにmenucatというスラッグ名でタクソノミーを登録する
 *
 * @return void
 */
function custom_register_taxonomy() {
    $args_menus = array(
        'hierarchical' => true,                            // 階層の親子関係を利用する
        'label'        => 'メニューカテゴリー',            // ラベルを指定する
        'rewrite'      => array('with_front' => false),    // パーマリンクの形式を指定する
    );
    register_taxonomy('menucat', 'menus', $args_menus);    // menus投稿タイプにmenucatというスラッグ名でタクソノミーを登録する

    $args_staffs = array(
        'hierarchical' => true,                               // 階層の親子関係を利用する
        'label'        => 'スタッフカテゴリー',               // ラベルを指定する
        'rewrite'      => array('with_front' => false),       // パーマリンクの形式を指定する
    );
    register_taxonomy('staffcat', 'staffs', $args_staffs);    //staffs投稿タイプにstaffcatというスラッグ名でタクソノミーを登録する
}
add_action('init', 'custom_register_taxonomy');

/**
 * スタッフ一覧ページの表示件数を設定する
 *
 * @param [type] $query
 * @return void
 */
function change_posts_in_staffs($query) {
    if ($query->is_archive('staffs')) {       // カスタム投稿タイプを指定する
        $query->set('posts_per_page', '100');    // 表示件数を指定する
    }
}
add_action('pre_get_posts', 'change_posts_in_staffs');
