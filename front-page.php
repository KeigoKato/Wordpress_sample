<?php get_header(); ?>

        <div class="main-wrapper py-5">
            <div class="container">
                <div class="row py-5 menu-list">
                    <span class="mx-auto py-3"><h3>メニュー</h3></span>
                    <div class="card-deck">
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <img class="card-img-top rounded-circle img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-3.png" alt="menu-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Tea</h5>
                                    <p class="card-text">□□□□□□□□□□●□□▲□□□×□□●□□▲□||□□□▲□□口□□</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <img class="card-img-top rounded-circle img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-1.png" alt="menu-2">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Desert</h5>
                                    <p class="card-text">□□□□□□□×□□●□□▲□||□□□□●□□▲□□□×□□●□□▲□||□□□▲□□口□□□||□□□▲□□口</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <img class="card-img-top rounded-circle img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-4.png" alt="menu-4">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Lunch</h5>
                                    <p class="card-text">□□□□×□□●□□□□□□□□□□●□□▲□□□×□□●□□▲□||□□□□●□□▲□□□▲□□口□□</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row py-5 blog-list">
                    <span class="mx-auto py-3"><h3>ブログ</h3></span>
                    <div class="card-deck">


                        <?php
                        $args = array(
                            'category_name' => 'blog',
                            'posts_per_page' => 4,
                            'ignore_sticky_posts' => 1
                        );
                        $blog_posts = new WP_Query($args);
                        $first_post = true;
                        ?>
                        <?php if ($blog_posts->have_posts()): ?>
                        <?php while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                        <div <?php post_class( 'entry entry--simple entry--excerpt col-sm-6 pb-5') ?>>
                            <div class="card border-0">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 img-thumbnail border', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                                    <?php else: ?>
                                    <img class="card-img-top rounded-0 img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-3.png" alt="menu-3">
                                    <?php endif; ?>
                                </a>
                                <div class="card-body p-3">
                                    <p class="card-text mb-2"><small class="text-muted"><time datetime="<?php the_time('Y-m-d') ?>"><?php echo the_time('Y / n / j (D)') ?></time></small></p>
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="card-title font-weight-bold"><?php the_title(); ?></h4>
                                    </a>
                                    <div class="card-text small">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-lg btn-block border-dark rounded">続きを読む</button></a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>

            </div>



            <div class="news-access-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 news-list">
                            <h3 class="text-center">ニュース</h3>
                            <table class="table table-striped">
                                <tbody>

                                    <?php
                                    $args = array(
                                        'category_name' => 'news',
                                        'posts_per_page' => 5,
                                        'ignore_sticky_posts' => 1
                                    );
                                    $news_posts = new WP_Query($args);
                                    ?>
                                    <?php if ($news_posts->have_posts()): ?>
                                    <?php while ($news_posts->have_posts()): $news_posts->the_post(); ?>
                                    <tr>
                                        <td class="column-1">
                                            <time datetime="<?php the_time('Y-m-d'); ?>"><small><?php the_time('Y / n / j (D)'); ?></small></time>
                                            <div class="tag-list">
                                                <?php the_tags('<h6 class="badge badge-warning mr-1 mb-0"><small>', '</small></h6><h6 class="badge badge-warning mr-1 mb-0"><small>', '</small></h6>');?>
                                            </div>
                                        </td>
                                        <td class="column-2">
                                            <a href="<?php the_permalink(); ?>">
                                                <small class="text-left">
                                                    <?php the_title(); ?> - <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                                </small>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6 access-list">
                            <h3 class="text-center">アクセス</h3>
                            <div class="row">
                                <div class="col-sm-12 access-list-map">
                                    <div class="embed-responsive embed-responsive-21by9">
                                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412142.38486977684!2d137.560781186932!3d36.194228600061756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d5b1fa9408ec7%3A0xab9291dd57c024c!2z5qeN44Kx5bKz!5e0!3m2!1sja!2sjp!4v1536461829560" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6 access-list-detail">
                                    <h2>sample Cafe</h2>
                                    <p>東京都目黒区大岡山<br>１−１−１−１</p>
                                </div>
                                <div class="col-sm-6 access-list-detail my-auto">
                                    <span>
                                        TEL : 03-1234-5678<br>
                                        営業時間 : 10:00 ~ 19:00<br>
                                        定休日 : 毎週水曜日
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php get_footer(); ?>