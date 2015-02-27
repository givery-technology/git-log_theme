<?php get_header(); ?>

<?php if(have_posts()): ?>
    <section class="mainPosts">
      <div class="search">
        <p class="search__result">検索結果：<?php the_search_query(); ?></p>
      </div>
      <?php while (have_posts()) : the_post(); ?>
      <article class="mainPosts__list">
        <div class="mainPosts__left">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="mainPosts__right">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <ul>
            <li>
              <span class="glyphicon glyphicon-calendar"></span>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            </li>
            <li>
              <span class="glyphicon glyphicon-user"></span>
              <span>Author</span>
              <span><?php the_author_meta("display_name"); ?></span>
            </li>
          </ul>
          <ul class="categories">
            <li>
              <span class="glyphicon glyphicon-bookmark"></span>
            </li>
            <li><?php the_category(" "); ?></li>
          </ul>
          <a class="readmore" href="<?php the_permalink(); ?>">Read More.</a>
        </div>
      </article>
      <?php endwhile; ?>
    </section>
<?php else: ?>
  <article class="notFound">
    <h2 class="notFound__title">お探しのページは見つかりませんでした</h2>
    <p class="notFound__body">
      「<?php the_search_query(); ?>」の検索結果に当てはまる記事は見つかりませんでした。<br />
      <a href="<?php bloginfo('url'); ?>">TOP</a>に戻って最新記事をご覧くだくか、他のキーワードで検索をしてください。
    </p>
  </article>
<?php endif; ?>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
