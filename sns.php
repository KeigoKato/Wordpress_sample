<ul class="social-btn-list text-center">
    <li>
        <a class="sns-btn twitter-btn" href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする">
            <span><span class="fab fa-twitter sns-icon fa-2x"></span>Twitter</span>
        </a>
    </li>
    <li>
        <a class="sns-btn facebook-btn" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする">
            <span><span class="fab fa-facebook sns-icon fa-2x"></span>Facebook</span>
        </a>
    </li>
    <li>
        <a class="sns-btn pocket-btn" href="http://getpocket.com/edit?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Pocketであとで読む">
            <span><span class="fab fa-get-pocket sns-icon fa-2x"></span>Pocket</span>
        </a>
    </li>
    <!-- <li>
        <a class="sns-btn feedly-btn" href="http://cloud.feedly.com/#subscription%2Ffeed%2F<?php echo urlencode(bloginfo('rss2_url')); ?>" target="_blank" title="Feedlyで購読する">
            <span>Feedly</span>
        </a>
    </li> -->
    <li>
        <a class="sns-btn google-btn" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Google+でシェアする">
            <span><span class="fab fa-google-plus-square sns-icon fa-2x"></span>Google+</span>
        </a>
    </li>
    <!-- <li>
        <a class="sns-btn hatena-btn" href="http://b.hatena.ne.jp/add?mode=confirm&amp;url=<?php echo urlencode(get_permalink()); ?>&amp;title=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" data-hatena-bookmark-title="<?php the_permalink(); ?>" title="このエントリーをはてなブックマークに追加する">
            <span>はてブ</span>
        </a>
    </li> -->
    <li>
        <a class="sns-btn line-btn" href="https://timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする">
            <span><span class="fab fa-line sns-icon fa-2x"></span>LINE</span>
        </a>
    </li>
    <li>
        <a class="sns-btn rss-btn" href="<?php echo urlencode(bloginfo('rss2_url')); ?>" target="_blank" title="RSSで購読する">
            <span><span class="fas fa-rss-square sns-icon fa-2x"></span>RSS</a>
        </span>
    </li>
</ul>