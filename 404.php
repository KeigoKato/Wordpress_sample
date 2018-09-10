<?php get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <div class="row py-5">

            <div class="col-sm-9 py-2 mb-4 left-article bg-white" style="height: 100%;">
                <div class="entry-content">
                    <h1 class="font-weight-bold py-2 px-3 mb-3 text-left" style="width: 100%">ページが見つかりませんでした。</h1>
                    <div class="separator mb-5"></div>
                    <p>お探しのページは一時的にアクセスができない状態にあるか、ページが移動もしくは削除されてしまった可能性があります。</p>
                    <p>以下の方法をお試し下さい。</p>
                    <ul>
                        <li>アドレスを再入力する。</li>
                        <li><a href="javascript:history.back();">前のページに戻る。</a></li>
                        <li><a href="<?php echo esc_url( home_url() ); ?>">トップページに戻る</a></li>
                        <li>下部の検索バーよりキーワード検索を試す。</li>
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