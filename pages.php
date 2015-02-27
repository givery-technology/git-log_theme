<?php get_header(); ?>

    <article class="singlePost">
      <?php while (have_posts()) : the_post(); ?>
      <div class="singlePost__info">
      </div>
      <h2 class="singlePost__postTitle"><?php the_title(); ?></h2>
      <div class="singlePost__thumbnail singlePost__thumbnail--pages">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="giveryMission">Your Growth, Our Future.</div>
      <section class="singlePost__body">
        <?php the_content(); ?>
      </section>
      <?php endwhile; ?>
    </article>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
