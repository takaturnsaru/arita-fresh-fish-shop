<aside class="category">
  <h2 class="category-title">カテゴリー一覧</h2>
  <ul class="category-list">
    <?php
    $args = array(
      "title_li"=>'',
    );
    wp_list_categories($args);
    ?>
  </ul>
</aside>