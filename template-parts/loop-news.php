<article class="news" id="news-all">
  <div class="news-image">
    <a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail() ): ?>
        <?php the_post_thumbnail( "midium" ); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png" alt="お知らせ画像">
      <?php endif; ?>
    </a>
  </div>

  <div class="news-category">
  <a href="<?php the_permalink(); ?>"><h3><?php the_category(); ?></h3></a>
  </div>
  
  <div class="news-content">
    <time class="news-time" datetime="<?php the_time('Y-m-d'); ?>"><a href="<?php the_permalink(); ?>"><?php the_time('Y年m月d日'); ?></a></time>
    <div class="news-title"><a href="<?php the_permalink(); ?>"><<?php the_title(); ?>></a></div>
    <div class="news-excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
    <p><a href="<?php the_permalink(); ?>">続きを読む</a></p>
  </div>
</article>
