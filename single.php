<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-9 py-2 mb-4 left-article bg-white">

                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <h2><span class="badge badge-secondary py-2 px-3 mb-3 text-left" style="width: 100%;"><?php the_title(); ?></span></h2>
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-thumbnail rounded mb-3', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                    <?php endif; ?>
                    <div class="entry-content">
                        <?php
                        the_content();
                        // 文章の長いページを複数ページに分割するためのボタンを作る
                        wp_link_pages(array(
                            'before' => '<div class="entry__page-links">',
                            'after' => '</div>',
                            'link_before' => '<span class="btn btn-default">',
                            'link_after' => '</span>',
                            'pagelink' => '%ページ',
                            'separator' => '',
                        ));
                        ?>
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
                    <div class="col-sm-12">
                        <?php get_template_part('sns'); ?>
                    </div>
                    <div class="separator mb-5"></div>
                </article>



                <div class="recommend-articles">
                    <h4 class="p-3 mb-2 font-weight-bold">関連投稿</h4>

                    <div class="row menu-list">
                        <div class="card-deck">
                            <?php
                            $post_id = get_the_ID();
                            $categories = get_the_category($post_id);
                            foreach ($categories as $cat) {
                                $catid = $cat->cat_ID;
                                break;
                            }
                            $recommend = new WP_Query(array(
                                'posts_per_page' => 4,
                                'cat' => $catid,
                                'post__not_in' => array($post_id)
                            ));
                            ?>
                            <?php if ($recommend->have_posts()): ?>
                            <?php while ($recommend->have_posts()): $recommend->the_post(); ?>
                            <div class="col-sm-6 mb-5">
                                <div class="card border-0">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 img-thumbnail border', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                                        <?php endif; ?>
                                    </a>
                                    <h6 class="card-title text-left font-weight-bold pt-2"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 30); ?></a></h6>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

                <div class="separator mb-5"></div>

                <div class="prev-next">
                    <ul class="list-inline pb-5">
                        <li class="float-left">
                            <span class="prev-btn nav-link">
                                <?php previous_post_link('%link', 'PREV') ?>
                            </span>
                        </li>
                        <li class="float-right">
                            <span class="next-btn nav-link">
                                <?php previous_post_link('%link', 'NEXT') ?>
                            </span>
                        </li>
                    </ul>
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