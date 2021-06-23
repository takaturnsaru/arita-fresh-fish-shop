<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo("name"); ?></title>
    <meta name="discription" content="昭和35年創業　新潟市北区の町のお魚屋さん">

    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/asset/css/work.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- css -->

    <?php
    wp_enqueue_script("jquery");
    wp_enqueue_script("menu-script", get_template_directory_uri() . "/asset/js/menu.js");
    wp_head();
    ?>
  </head>
  
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
      <div class="top-menu-wrapper" id = "top-menu">
        <div class="menu">
            <div class="menu-header">
            <div class="close-btn" id="close-menu">
              <img src="/Users/saitoutakayuki/practice/arita-fresh-fish-shop/asset/top-images/close-mark.png">
            </div>
            <nav>
              <ul>
                <li>
                  <a href="news.html">News</a>
                </li>
                <li>
                  <a href="work.html">Work</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/arita_sengyo/?hl=ja">instagram</a>
                </li>
                <li>
                  <a href="restaurant.html">飲食店の方はこちら</a>
                </li>
              </ul>
            </nav>
          </div>
      </div>

      <header>
        <div class="header-container">
          <div class="header-heading">
            <p>新潟市北区島見町の小さなお魚屋さん</p>
          </div>
          <div class="header-logo">
            <a href="index.html"><img src="/Users/saitoutakayuki/practice/arita-fresh-fish-shop/asset/top-images/logo-1.png"></a>
          </div>
          <div class="header-restaurant">
            <a href="restaurant.html">飲食店の方はこちら</a>
          </div>
          <div class="header-menu">
            <img src="/Users/saitoutakayuki/practice/arita-fresh-fish-shop/asset/top-images/menu-logo.png">
          </div>
        </div>
      </header>
