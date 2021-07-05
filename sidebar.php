<aside class="category">
  <div class="sidebar-category">
    <div class="category-list">
        <?php
        $args = array(
          "title_li"=>'',
        );
        wp_list_categories($args);
        ?>
    </div>
  </div>
</aside>