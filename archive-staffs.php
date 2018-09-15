<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">

            <div class="col-sm-9 py-2 mb-4 left-article bg-white">
                <div class="taxonomy py-3 px-2 border-bottom">
                    <ul class="taxonomy-list m-0">
                    </ul>
                </div>

                <div class="row px-3 staff-list">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>

                    <?php
                    $taxonomy_list = get_the_terms($post->ID, 'staffcat');
                    $tax_child_name = array();
                    foreach ($taxonomy_list as $tax) {
                        if (!$tax->parent == 0) {
                            $tax_child_name[] = $tax->name;
                        } else {
                            $tax_parent_name = $tax->name;
                        }
                    }
                    ?>

                    <div class="col-6 col-sm-3 text-center staff-list-item">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('staff-thumbnail', array('class' => 'img-thumbnail rounded-circle', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a>
                        <div class="card text-center staff-detail">
                            <div class="card-body text-center px-2 pb-1 pt-5">
                                <p class="card-text"><small class="text-muted"><?php echo esc_html(implode(', ', $tax_child_name)); ?></small></p>
                                <h5 class="card-title"><?php the_title(); ?></h5>
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