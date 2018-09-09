<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-9 py-2 mb-4 left-article bg-white">
                <h2><span class="badge badge-secondary py-2 px-3 mb-3 text-left" style="width: 100%;">8月新メニューのお知らせ</span></h2>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-postlist-000.jpg" class="img-thumbnail rounded mb-3" alt="Responsive image">
                <div class="entry-content">
                    <p>８月の新メニューが登場しました！</p>
                    <p>ランチタイムには季節の野菜をふんだんに使ったパニーニのＡセットが ￥８００円！ぜひこの機会にお召し上がりください～！</p>
                    <p>パニーニはフレッシュレタスと大人気のイタリアンハムを使用しました。使用しているパンの塩加減と甘さがとても相性良く、まさにランチタイムにぴったりなものとなっております。</p>
                    <p>お次は大人気のムーをご紹介します！</p>
                    <h2>ムーを使用したフレンチトースト</h2>
                    <p>大人気のフレンチトーストですが、こちらの人気の理由をご紹介します♪</p>
                    <h3>h3のテスト</h3>
                    <p>外側はこんがりデニッシュのような食感で、中はタマゴが染みこんでとろとろ！大きさはそんなにありませんが、とても食べ応えのある一品です！</p>
                    <h4>h4のテスト</h4>
                    <p>しっかりとフレンチトーストの味がついているのでそのままでも美味しく召し上がれますが、はちみつをつけて食べてもまた美味しいです！</p>
                    <p>一度食べたら忘れられないフレンチトースト！<br>
                    作りたてのバターの風味と香りを是非お試し下さい！</p>
                </div>

                <div class="entry-footer py-2">
                    <div class="entry-time text-right">
                        <small><span class="far fa-clock mr-3"></span><a href="#" class="text-primary">keigo_kato</a> at <time datetime="2000-01-01">2000/00/00</time></small>
                    </div>
                    <div class="entry-tag text-right">
                        <small>
                            <span class="fas fa-tag mr-3"></span>
                            <span><a href="#" class="text-primary mx-2">ブログ</a></span>
                            <span><a href="#" class="text-primary mx-2">お知らせ</a></span>
                        </small>
                    </div>
                </div>
                <div class="separator mb-5"></div>


                <div class="recommend-articles">
                    <h4 class="p-3 mb-3 font-weight-bold">関連投稿</h4>

                    <div class="row menu-list">
                        <div class="card-deck">
                            <?php for ($i=0; $i<4; $i++): ?>
                            <div class="col-sm-6 mb-5">
                                <div class="card border-0">
                                    <a href="#"><img class="card-img-top rounded-0 img-thumbnail border" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img-home-menu-4.png" alt="menu-4"></a>
                                    <h6 class="card-title text-left font-weight-bold pt-2"><a href="#">大人気のムーを使用したフレンチトースト</a></h6>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="separator mb-5"></div>
                <div class="prev-next">
                    <ul class="list-inline pb-5">
                        <li class="float-left">
                            <a class="prev-btn nav-link" href="#">PREV</a>
                        </li>
                        <li class="float-right">
                            <a class="next-btn nav-link" href="#">NEXT</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-3 right-sidebar">
                <div class="card mb-5 rounded-0">
                    <div class="card-header rounded-0" style="width: 100%">
                        最新の投稿
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item rounded-0">cras justo odio</li>
                        <li class="list-group-item rounded-0">dapibus ac facilisis in</li>
                        <li class="list-group-item rounded-0">vestibulum at eros</li>
                        <li class="list-group-item rounded-0">dapibus ac facilisis in</li>
                        <li class="list-group-item rounded-0">vestibulum at eros</li>
                    </ul>
                </div>
                <div class="card mb-5 rounded-0">
                    <div class="card-header rounded-0" style="width: 100%">
                        最新の投稿
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item rounded-0">cras justo odio</li>
                        <li class="list-group-item rounded-0">dapibus ac facilisis in</li>
                        <li class="list-group-item rounded-0">vestibulum at eros</li>
                        <li class="list-group-item rounded-0">dapibus ac facilisis in</li>
                        <li class="list-group-item rounded-0">vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>