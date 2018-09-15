<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-9 py-2 mb-4 left-article bg-white">


                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <h2><span class="badge badge-secondary py-2 px-3 mb-3 text-left" style="width: 100%;"><?php the_title(); ?></span></h2>
                <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-thumbnail rounded mb-3', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                </a>
                <?php endif; ?>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
                <div class="entry-footer py-2">
                    <div class="entry-time text-right">
                        <small><span class="far fa-clock mr-3"></span><?php the_author_posts_link(); ?> at <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y / n / d (D)'); ?></time></small>
                    </div>
                    <div class="entry-tag text-right">
                        <small>
                            <?php if( has_tag() ): ?>
                            <span class="fas fa-tag mr-3"></span>
                            <?php the_tags( '<span class="text-primary mr-2">', '</span><span class="text-primary mr-2">', '</span>' ); ?>
                            <?php endif; ?>
                        </small>
                    </div>
                </div>
                <div class="separator mb-5"></div>
                <?php endwhile; ?>
                <div class="container-fluid">
                    <div id="page-nav">
                    <?php
                    if (function_exists('page_navi')):
                        page_navi('elm_class=page-nav-list&edge_type=span');
                    endif;
                    ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 right-sidebar">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>