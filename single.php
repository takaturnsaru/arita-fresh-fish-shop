<?php get_header('2'); ?>

    <main>
      <div class="news-single">
        <div class="news-heading">
          <h1>News</h1>
        </div>
        <div class="news-sidebar">
          <?php get_sidebar(); ?>
        </div>
        <div class="news-single-contents">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="single-news-title">
                <?php the_title(); ?>
              </div>
              <div class="single-news-date">
                <div class="single-news-category">
                  <?php the_category();?>
                </div>
                <time datetime="Y-m-d"><?php the_time("Y年m月d日"); ?></time>
              </div>
              <div class="single-news-content">
                <?php the_content();?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="postlink">
          <div class="postLink postLink-prev"><?php previous_post_link('<i class="fa fa-toggle-left "></i>　%link'); ?></div>
          <div class="postLink postLink-next"><?php next_post_link('%link　<i class="fa fa-toggle-right "></i> '); ?></div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>