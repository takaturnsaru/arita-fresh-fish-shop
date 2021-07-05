<?php get_header('2'); ?>

    <main>
      <div class="news-single">
        <div class="news-heading">
          <h1>News</h1>
        </div>
        <div class="news-single-contents">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part("template-parts/loop", "news"); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="news-sidebar">
          <?php get_sidebar(); ?>
        </div>
          <div class="postlink">
            <div class="postLink postLinj-prev"><?php previous_post_link('<i class="fa fa-toggle-left "></i>%link'); ?>
            <div class="postLink postLinj-next"><?php next_post_link('%link<i class="fa fa-toggle-right "></i> '); ?>
          </div>
      </div>
    </main>

<?php get_footer(); ?>