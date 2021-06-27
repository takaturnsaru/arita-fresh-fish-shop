<?php get_header('2'); ?>

    <main>
      <div class="news">
        <div class="news-heading">
          <h1>News</h1>
        </div>
        <div class="news-contents">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part("template-parts/loop", "news"); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="news-sidebar">
          <?php get_sidebar(); ?>
        </div>
        <div class="page-move">
          <div class="previous-page">
            <a href="">前のページ</a>
          </div>
          <div class="current-page">
            <p>1/0</p>
          </div>
          <div class="next-page">
            <a href="">次のページ</a>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>