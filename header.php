<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <div class="row">
                <header class="navbar navbar-expand-lg navbar-light p-0">
                    <!-- <div class="col-xs-12 col-sm-3 col-md-3">
                        <h1 class="header-logo"><a class="navbar-brand" href="<?php // echo esc_url(home_url('/')); ?>">Site Logo</a></h1>
                    </div> -->
                    <div class="col-xs-12 col-sm-12 col-md-12 xs-no-gutter">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                        if (has_nav_menu('header_nav')) {
                            wp_nav_menu(array(
                                'theme_location' => 'header_nav',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'navbarNavDropdown',
                                'menu_class' => 'navbar-nav mx-auto',
                                'link_before' => '<span class="fas fa-home fa-2x"></span>',
                            ));
                        }
                        ?>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="<?php echo esc_url(home_url('/')); ?>"><span class="fas fa-home fa-2x"></span>HOME</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="#"><span class="fas fa-exclamation-circle fa-2x"></span>NEWS</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="#"><span class="fas fa-list fa-2x"></span>MENU</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="#"><span class="fas fa-map-marked-alt fa-2x"></span>ACCESS</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="#"><span class="fas fa-image fa-2x"></span>GALLERY</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link py-4" href="#"><span class="fas fa-tag fa-2x"></span>BLOG</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="mainvisual jumbotron mb-0 py-5 rounded-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title-logo">
                        <?php if (is_front_page()): ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-mainvisual-title.png" class="title-logo" alt="title-log">
                        <?php else: ?>
                        <h1 class="page-title font-serif">
                            <?php if (is_single() || is_page()):
                                the_title();
                            elseif (is_search()):
                                echo "「".esc_html(get_search_query())."」の検索結果";
                            elseif (is_404()):
                                echo "お探しのページは見つかりませんでした";
                            else:
                                the_archive_title();
                            endif;
                            ?>
                        </h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>