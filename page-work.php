<?php get_header("2"); ?>

  <?php if ( have_posts() ):?>
    <?php while( have_posts() ): the_post(); ?>
      <main>
        <section>
          <div class="work-main-movie">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
          </div>
        </section>

        <section>
          <div class="work-container">
            <div class="work-heading">
              <h1><?php wp_title(''); ?></h1> 
            </div>
            <div class="work-title">
              <h2>有田鮮魚のこだわり</h2>
            </div>
            <div class="commitments">
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
          </div>
        </section>
        
        <section>
          <div class="shop-list">
            <div class="shop-list-heading">
              <h1>shop-list</h1>
            </div>
            <div class="main-shop">
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
                <div class="main-shop-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
                </div>
              </div>
            </div>
            <div class="street-markets">
              <div class="street-market-1">
                <div class="street-market-overview">
                  <div class="market-name">
                    <h2>亀田露店市場</h2>
                  </div>
                  <div class="opening-info">
                    <h3>開催日</h3>
                    <p>3と9のつく日<br>8:00~12:00</p>
                  </div>
                  <div class="info">
                    新潟県新潟市江南区東本町2～5<br>
                    主に新鮮な農産物や海産物のお店が出店しています。昔ながらの人情溢れる商いが行われているのが特徴の露店市場です
                  </div>
                </div>
                <div class="street-market-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
                </div>
              </div>
              <div class="street-market-2">
                <div class="street-market-overview">
                  <div class="market-name">
                    <h2>松浜露店市場</h2>
                  </div>
                  <div class="opening-info">
                    <h3>開催日</h3>
                    <p>毎月 2日 7日 12日 17日 22日 27日<br>8:00~12:00</p>
                  </div>
                  <div class="info">
                  新潟市北区松浜本町4（新屋敷通り）<br>
                  とれたての農産物や海産物、日用品、生花、洋服やぽっぽ焼などなどたくさんのお店が出店しています。お祭りのような雰囲気で、子供連れのお客様などは楽しく買い物をされています。
                  </div>
                </div>
                <div class="street-market-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
                </div>
              </div>
              <div class="street-market-1">
                <div class="street-market-overview">
                  <div class="market-name">
                    <h2>葛塚露店市場</h2>
                  </div>
                  <div class="opening-info">
                    <h3>開催日</h3>
                    <p>毎月 1日 5日 10日 15日 20日 25日<br>時間 8:00~14:00</p>
                  </div>
                  <div class="info">
                  新潟市北区葛塚地内（常盤町通り）<br>
                  四季に通じた旬の魚や、果物・野菜などの生鮮食料はもちろん、衣類品や生花までもが並び、地域台所として「よりなせや‼︎葛塚市」の名称で親しまれている市場です

                  </div>
                </div>
                <div class="street-market-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
                </div>
              </div>
              <div class="street-market-2">
                <div class="street-market-overview">
                  <div class="market-name">
                    <h2>農家持ち寄り市場　彩彩</h2>
                  </div>
                  <div class="opening-info">
                    <h3>出店</h3>
                    <p>不定期（出店情報に記載します）<br>時間 8:00~12:00</p>
                  </div>
                  <div class="info">
                  新潟県新潟市江南区嘉木12<br>
                  地域の農家たちが、農産物を持ち寄る農産物直売所です。新鮮な農産物を毎日販売している売場を一部を借り、毎月不定期ですが出店しております。
                  </div>
                </div>
                <div class="street-market-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/noimage-760x460.png">
                </div>
              </div>
            </div>
            <div class="street-market-map">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/top-images/niigata-city.png">
            </div>
          </div>
        </section>
        </div>
      </main>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>