<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="discription" content="昭和35年創業　新潟市北区の町のお魚屋さん">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/asset/css/index.css" rel="stylesheet">
    <!-- css -->
    <?php
    wp_enqueue_script("jquery");
    wp_enqueue_script("menu-script", get_template_directory_uri() . '/asset/js/menu.js');
    wp_enqueue_style( "font-awesome", 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_head();
    ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
      <div class="top-menu-wrapper" id = "top-menu">
        <div class="menu">
          <div class="menu-header">
            <div class="menu-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/logo-1.png">
            </div>
            <div class="close-btn" id="close-menu">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/close-mark.png">
            </div>
          </div>
        </div>
        <nav>
          <?php
            $args = array(
              "menu" => "global-navigation",
              "menu" => "",
              "container" => "false",
            );
            wp_nav_menu($args);
          ?>
        </nav>
      </div>

      <header>
        <div class="header-container">
          <div class="header-heading">
            <p><?php echo bloginfo("description"); ?></p>
          </div>
          <div class="header-restaurant">
          <a href="restaurant">飲食店の方はこちら</a>
        </div>
          <div class="header-menu">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/menu-logo.png">
          </div>
        </div>
      </header>
