<?php get_header(); ?>

<main>
  <div class="news-container">
    <div class="news-heading">
      <h1>News</h1>
    </div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()): the_post(); ?>
        <article class="news-content">
          <div class="news-image">
            <?php if (has_post_thumbnail() ): ?>
              <?php the_post_thumbnail("midium"); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png" alt="お知らせ画像">
            <?php endif; ?>
          </div>
          <div class="category">
            <?php the_category(); ?>
            <time class="time-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time("Y年m月d日"); ?></time>
          </div>
          <div class="news-title">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="desc">
            <p><?php the_content(); ?></p>
          </div>
          <div class="postlinks">
            <div class="postlink postlink-prev"><?php previous_post_link('<i class="fa fa-toggle-left"></i>%link'); ?></div>
            <div class="postlink postlink-next"><?php next_post_link('%link<i class="fa fa-toggle-right"></i>'); ?></div>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>