<?php get_header('2'); ?>


<main>
  <div class="news-container">
    <div class="news-heading">
      <h1>Ne/h1>
    </div>
    <div class="news-contents">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part("template-parts/loop", "news"); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>