<?php get_header("2"); ?>


<main>
  <div class="news-container">
    <div class="news-heading">
      <h1>News</h1>
      <div class="news-sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
    <div class="news-genre">
      <?php wp_title(''); ?>
    </div>
    <div class="news-contents">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part("template-parts/loop", "news"); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php if (function_exists('wp_pagenavi')){ wp_pagenavi(); } ?>
  </div>
</main>

<?php get_footer(); ?>