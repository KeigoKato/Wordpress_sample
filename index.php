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
                                    <p class="card-text">シェフの焼く絶品のパンと、バリスタの入れるコーヒーでリフレッシュする贅沢をお楽しみください。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <img class="card-img-top rounded-circle img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-1.png" alt="menu-2">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Desert</h5>
                                    <p class="card-text">おいしい野菜を使った、元気になれるメニューがいっぱい！平日のランチはもちろん、お休みの日にも美味しいランチタイムをお楽しみください。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <img class="card-img-top rounded-circle img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-4.png" alt="menu-4">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Lunch</h5>
                                    <p class="card-text">すべて直送で新鮮な食材で、四季折々の旬の味をお楽しみいただけます。本格的なお料理をゆっくりとご堪能ください。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row py-5 blog-list">
                    <span class="mx-auto py-3"><h3>ブログ</h3></span>
                    <div class="card-deck">
                        <?php for ($i=0; $i<6; $i++): ?>
                        <div class="col-sm-6 pb-5">
                            <div class="card border-0">
                                <img class="card-img-top rounded-0 img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-3.png" alt="menu-3">
                                <div class="card-body">
                                    <p class="card-text mb-2"><small class="text-muted">2018 / 12 / 12</small></p>
                                    <h4 class="card-title font-weight-bold">パニーニとエスプレッソ</h4>
                                    <p class="card-text small">
                                        こんにちわ、MAVERICK CAFEです！今回は新たにイタリアンハムとレタスのパニーニをご紹介します！　パニーニセット　800yen　イタリアンハムとしゃきしゃきのレタスがアクセントになって美味しいくお召し上がり頂けます。ぜひ一度…
                                    </p>
                                </div>
                                <button type="button" class="btn btn-lg btn-block border-dark rounded">Block level button</button>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>


            </div>
        </div>

<?php get_footer(); ?>