<?php get_header(); ?>

    <section class="mainPosts">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=20&paged='.$paged);
        if(have_posts()):
          while (have_posts()):
              the_post();
      ?>
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
        <?PHP endwhile; ?>
      <?php endif; // have_posts ?>
    </section>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
