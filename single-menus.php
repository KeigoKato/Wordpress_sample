<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">


            <div class="col-sm-9 py-2 mb-4 left-article bg-white">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="row">
                        <div class="col-sm-5 text-center p-2">
                            <?php the_post_thumbnail('middle-thumbnail', array('class' => 'img-thumbnail', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                        </div>
                        <div class="card-body col-sm-7 d-flex flex-column align-items-start">
                            <h5 class="card-title py-2 border-bottom"><?php the_title(); ?></h5>
                            <p class="card-text mb-auto">
                                <?php the_content(); ?>
                            </p>
                            <table class="table" style="table-layout: fixed;">
                                <thead>
                                    <tr class="text-center">
                                        <?php if (get_post_meta($post->ID, 'menu-price-s', true) || get_post_meta($post->ID, 'menu-price-m', true) || get_post_meta($post->ID, 'menu-price-l', true)): ?>
                                        <th scope="col">S</th>
                                        <th scope="col">M</th>
                                        <th scope="col">L</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <?php if (get_post_meta($post->ID, 'menu-price-s', true)): ?>
                                        <td>¥<?php echo esc_html(get_post_meta($post->ID, 'menu-price-s', true)); ?></td>
                                        <?php else: ?>
                                        <td> - </td>
                                        <?php endif; ?>
                                        <?php if (get_post_meta($post->ID, 'menu-price-m', true)): ?>
                                        <td>¥<?php echo esc_html(get_post_meta($post->ID, 'menu-price-m', true)); ?></td>
                                        <?php else: ?>
                                        <td> - </td>
                                        <?php endif; ?>
                                        <?php if (get_post_meta($post->ID, 'menu-price-l', true)): ?>
                                        <td>¥<?php echo esc_html(get_post_meta($post->ID, 'menu-price-l', true)); ?></td>
                                        <?php else: ?>
                                        <td> - </td>
                                        <?php endif; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-sm-3 right-sidebar">
            <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>