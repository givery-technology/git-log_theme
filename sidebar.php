<?php
/**
 * @package git-log_theme
 */
?>
    <aside class="sidebar">
      <section class="sidebar__contents">
        <h4>GiTLog 人気記事</h4>
        <?php if (have_posts()) : query_posts('posts_per_page=5&orderby=rand'); ?>
        <ul class="sidebar__list sidebar__list--recommend">
          <?php while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
              <h5><?php the_title(); ?></h5>
            </a>
          </li>
          <?php
              endwhile;
            endif;
          ?>
        </ul>
      </section>
      <div class="sidebar__banner">
        <a href="#">
          <img src="images/banner-sample.png" alt="banner-sample">
        </a>
      </div>
    </aside>
