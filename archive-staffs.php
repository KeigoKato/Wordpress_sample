<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">

            <div class="col-sm-9 py-2 mb-4 left-article bg-white">

                <div class="row px-3 staff-list">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>

                    <?php
                    $taxonomy_list = get_the_terms($post->ID, 'staffcat');
                    $tax_name = array();
                    foreach ($taxonomy_list as $tax) {
                        $tax_name[] = $tax->name;
                    }
                    ?>

                    <div class="col-6 col-sm-3 text-center staff-list-item">
                        <span data-toggle="modal" data-target="#exampleModalCenter-<?php the_ID(); ?>"><?php the_post_thumbnail('staff-thumbnail', array('class' => 'img-thumbnail staff-list-thumbnail rounded-circle', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></span>
                        <div class="card text-center staff-detail">
                            <div class="card-body px-2 pb-1 pt-5">
                                <p class="card-text text-center"><small class="text-muted"><?php echo esc_html(implode(', ', $tax_name)); ?></small></p>
                                <h5 class="card-title text-center"><?php the_title(); ?></h5>

                                <!-- ▼modal-window▼ -->
                                <div class="modal fade" id="exampleModalCenter-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content rounded-0">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle"><?php the_title(); ?><small class="text-muted ml-3">/ <?php echo esc_html(implode(', ', $tax_name)); ?></small></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <?php the_post_thumbnail('staff-thumbnail', array('class' => 'img-thumbnail staff-list-thumbnail-modal', 'alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
                                                    </div>
                                                    <div class="col-sm-7 text-left">

                                                        <div class="modal-custom-field border-bottom pb-2 px-2">
                                                            <span class="badge badge-primary rounded-0">趣味</span>
                                                        </div>
                                                        <div class="modal-custom-field-detail mb-3 px-2">
                                                            <span><?php echo nl2br(esc_html(get_post_meta($post->ID, '趣味', true))); ?></span>
                                                        </div>

                                                        <div class="modal-custom-field border-bottom pb-2 px-2">
                                                            <span class="badge badge-primary rounded-0">特技</span>
                                                        </div>
                                                        <div class="modal-custom-field-detail mb-3 px-2">
                                                            <span><?php echo nl2br(esc_html(get_post_meta($post->ID, '特技', true))); ?></span>
                                                        </div>

                                                        <div class="modal-custom-field border-bottom pb-2 px-2">
                                                            <span class="badge badge-primary rounded-0">好きな食べ物</span>
                                                        </div>
                                                        <div class="modal-custom-field-detail mb-3 px-2">
                                                            <span><?php echo nl2br(esc_html(get_post_meta($post->ID, '好きな食べ物', true))); ?></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ▲modal-window▲ -->




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