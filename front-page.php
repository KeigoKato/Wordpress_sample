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
                                    <a href="#">
                                        <h4 class="card-title font-weight-bold">パニーニとエスプレッソ</h4>
                                    </a>
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

            <div class="news-access-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 news-list">
                            <h3 class="text-center">ニュース</h3>
                            <table class="table table-striped">
                                <tbody>
                                    <?php for ($i=0; $i<5; $i++): ?>
                                    <tr>
                                        <td class="column-1">
                                            <time datetime="2018/12/12">2018/12/12</time>
                                            <div class="tag-list">
                                                <h6 class="badge badge-warning">
                                                    <a href="#"><small>メニュー</small></a>
                                                </h6>
                                                <h6 class="badge badge-warning">
                                                    <a href="#"><small>新商品</small></a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="column-2">
                                            <a href="#">
                                                <small class="text-left">
                                                    ８月の新メニューが登場しました！ランチタイムには季節の野菜をふんだんに揃えたＡセットが…
                                                </small>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endfor; ?>
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