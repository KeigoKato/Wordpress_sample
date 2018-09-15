<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">

            <div class="col-sm-9 py-2 mb-4 left-article bg-white">
                <ul class="taxonomy-list">
                    <li><a href="<?php echo esc_url(home_url('/menus')); ?>">ALL</a></li>
                    <?php
                    $args = array(
                        'taxonomy' => 'menucat',
                        'title_li' => '',
                        // 'depth' => 1,  // 親階層のみ表示させたいならこれに1を立てる
                    );
                    wp_list_categories($args);
                    ?>
                </ul>
                <div class="row">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail', array('class' => 'img-thumbnail rounded-circle', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a>
                                <a href="<?php the_permalink(); ?>"><h5 class="card-title py-2 border-bottom"><?php the_title(); ?></h5></a>
                                <span class="text-left">
                                    <?php the_excerpt(); ?>
                                </span>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><small>詳細を見る</small></a>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>

            <div class="col-sm-3 right-sidebar">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>