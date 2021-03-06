<?php get_header(); ?>

    <main>
      <section>
        <div class="top-image">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/index-main-2.png">
        </div>
      </section>
      <section>
        <div class="news-container show">
          <div class="news-heading">
            <h1>News</h1>
          </div>
          <div class="news-contents">
            <?php query_posts("posts_per_page=4"); ?>
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part("template-parts/loop", "news"); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="news-list-move">
            <a class ="show" href="category/all/">News一覧へ　⇨</a> 
          </div>
        </div>
      </section>

      <section>
        <div class="about-container">
          <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-imate-shop.jpg">
          </div>
          <div class="about-discription show">
            <div class="about-heading">
              <h1>about</h1>
            </div>
            <div class="about-title">
              <h2>創業昭和31年<br>長年愛されている町のお魚屋さん</h2>
            </div>
            <div class="about-content">
              <p>新潟県新潟市北区島見町にある有田鮮魚<br>創業昭和31年から長い間たくさんのお客様に愛され続けている新潟市北区島見町にある小さなお魚屋さんです。一般のお客様だけではなく飲食店のお客様に新鮮な魚を提供しております。これからも、魚の魅力を知ってもらうため全力て頑張ってまいります。</p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="work-container">
          <div class="work-image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/works-image.png">
          </div>
          <div class="work-heading show">
            <h1>work</h1>
          </div>
          <div class="work-title show">
            <h2>有田鮮魚のこだわり</h2>
          </div>
          <div class="commitments show">
            <div class="commitment">
              <div class="commitment-circle">
                <p>その1</p>
              </div>
              <div class="commitment-heading">
                <h3>移動型鮮魚店</h3>
              </div>
              <div class="commitment-content">
                <p>
                  自宅店舗だけでなく、多くのお客様に魚の魅力をお伝えしたく、各露店市場にも出店し、販売しております。
                </p>
              </div>
            </div>
            <div class="commitment">
              <div class="commitment-circle">
                <p>その２</p>
              </div>
              <div class="commitment-heading">
                <h3>対面型販売店</h3>
              </div>
              <div class="commitment-content">
                <p>
                  昨今、対面販売する店が店が減ってきている中、有田鮮魚は対面販売を強みとし、文章では伝えられない魚の魅力を伝え、販売しております。
                </p>
              </div>
            </div>
            <div class="commitment">
              <div class="commitment-circle">
                <p>その３</p>
              </div>
              <div class="commitment-heading">
                <h3>こだわり抜いた新鮮な魚</h3>
              </div>
              <div class="commitment-content">
                <p>
                  長年やってきた経験、知識を活かし、どの店に負けない最高の商品を常に提供し続けています。
                </p>
              </div>
            </div>
          </div>
          <div class="work-list-move show">
            <a href="work">もっと詳しく　⇨</a>
          </div>
        </div>
      </section>

      <section>
        <div class="fish-imagess">
          <div class="fish-images">
            <div class="fish-image1">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-1.jpg">
            </div>
            <div class="fish-image2">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-2.jpg">
            </div>
            <div class="fish-image3">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-3.jpeg">
            </div>
            <div class="fish-image4">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image5.jpeg">
            </div>
            <div class="fish-image5">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image6.jpeg">
            </div>
          </div>
          <div class="fish-images">
            <div class="fish-image1">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-1.jpg">
            </div>
            <div class="fish-image2">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-2.jpg">
            </div>
            <div class="fish-image3">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image-3.jpeg">
            </div>
            <div class="fish-image4">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image5.jpeg">
            </div>
            <div class="fish-image5">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/main-image6.jpeg">
            </div>
          </div>
        </div>

        </section>

        <section>
          <div class="shop-infomation-container">
            <div class="shop-infomation-heading">
              <h1>shop infomation</h1>
            </div>
            <div class="shop-overview">
              <div class="shop-info">
                <div class="shop-name">
                  <h2>有田鮮魚</h2>
                </div>
                <div class="shop-address">
                  <p>住所<br>〒950-3102<br>新潟県新潟市北区島見町513</p>
                </div>
                <div class="shop-phone-number">
                  <p>電話番号<br>025-255-2054</p>
                </div>
                <div class="bisiness-hours">
                  <p><span>営業時間</span><br>午前 00:00〜00:00<br>午後 00:00〜00:00</p>
                </div>
              </div>
              <div class="shop-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2367.7128193293647!2d139.19260182027497!3d37.97205803599856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8b35a7408ef39b%3A0x466e9f4971d33749!2z44CSOTUwLTMxMDIg5paw5r2f55yM5paw5r2f5biC5YyX5Yy65bO26KaL55S677yV77yR77yT!5e0!3m2!1sja!2sjp!4v1623809145595!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="infomation-container">
            <div class="contact-container">
              <div class="contact">
                <div class="contact-heading">
                  <h1>Contact</h1>
                </div>
                <div class="contact-discription">
                  <p>お問い合わせフォームはこちら</p>
                </div>
                <div class="contact-btn">
                  <a href="contact">お問い合わせフォームへ</a>
                </div>
              </div>
            </div>
            <div class="sns-container">
              <div class="sns">
                <div class="sns-heading">
                  <h1>SNS</h1>
                </div>
                <div class="sns-discription">
                  <p>instagramでも情報を発信しております。</p>
                </div>
                <div class="instagram-btn">
                  <a href="https://www.instagram.com/arita_sengyo/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/ico-instagram.svg"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>