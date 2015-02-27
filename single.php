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
          <span><?php the_author_meta("display_name"); ?></span>
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
