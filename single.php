<?php get_header(); ?>

    <article class="singlePost">
      <?php while (have_posts()) : the_post(); ?>
      <div class="singlePost__info">
        <span class="glyphicon glyphicon-calendar"></span>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
      </div>
      <h2 class="singlePost__postTitle"><?php the_title(); ?></h2>
      <div class="singlePost__info">
        <div class="author">
          <span class="glyphicon glyphicon-user"></span>
          <span>Author</span>
          <span><?php the_author_posts_link(); ?></span>
        </div>
        <ul class="categories">
          <li>
            <span class="glyphicon glyphicon-bookmark"></span>
          </li>
          <li><?php the_category(" "); ?></li>
      </div>
      <div class="singlePost__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="singlePost__social">
        <!-- Twitter -->
        <div class="singlePost__social__twitter">
          <a href="https://twitter.com/share" class="twitter-share-button twitter-count-vertical" data-count="vertical" data-lang="ja" data-related="">ツイート</a>
        </div>
        <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
        </script>
        <!-- /Twitter -->

        <!-- Facebook -->
        <div class="singlePost__social__facebook">
          <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
        <!-- Facebook -->

        <!-- google+ -->
        <div class="singlePost__social__google">
          <div class="g-plusone" data-size="tall"></div>
          <script type="text/javascript">
            window.___gcfg = {lang: 'ja'};

            (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/platform.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
          </script>
        </div>
        <!-- google+ -->

        <!-- Hatena -->
        <div class="singlePost__social__hatena">
          <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async></script>
        </div>
        <!-- Hatena -->
      </div>
      <section class="singlePost__body">
        <?php the_content(); ?>
      </section>
      <div class="singlePost__author">
        <div class="singlePost__authorIcon">
          <?php echo get_avatar(get_the_author_meta("ID"), 500); ?>
        </div>
        <div class="singlePost__authorName"><?php the_author_meta("display_name"); ?></div>
        <div class="singlePost__authorPosition"><?php the_author_meta("position"); ?></div>
        <div class="singlePost__authorInfo"><?php the_author_meta("description"); ?></div>
      </div>
      <?php endwhile; ?>
    </article>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
