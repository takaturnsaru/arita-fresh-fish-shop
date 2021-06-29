<?php get_header("2"); ?>

    <main>
      <section>
        <div class="contact-container">
          <div class="contact-heading">
            <h1><?php wp_title(''); ?></h1>
          </div>
          <div class="contact-message">
            <p>魚の注文から、有田鮮魚に関するお問い合わせはこちらのフォームからお願いいたします。</p>
          </div>
          <div class="contact-form">
            <form action="" method="POST">
              <div>
                <label for="name">お名前</label><br>
                <input type="text" id="name" name="your-name" placeholder="有田　魚助">
              </div>
              <div>
                <label for="e-mail">メールアドレス</label><br>
                <input type="text" id="e-mail" name="e-mail" placeholder="1234.5678@gmail.com">
              </div>
              <div>
                <label for="content">メッセージ</label><br>
                <textarea id="contact" name="contact" placeholder="お問い合わせ内容"></textarea>
              </div>
            </div>
              <div>
                <input type="submit" id="submit" value="送信する">
              </div>
          </form>
        </div>

      </section>
    </main>

<?php get_footer(); ?>