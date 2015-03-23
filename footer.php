<?php
/**
 * @package git-log_theme
 */
?>
  </div><!-- /.warpper -->

  <footer id="footer" class="footer">
    <div class="footer__wrapper">
      <ul class="footer__info">
        <li><a href="http://givery.co.jp/" target="_brank">会社情報</a></li>
        <li><a href="https://www.wantedly.com/companies/givery_technology" target="_brank">GiTについて</a></li>
        <li><a href="https://www.wantedly.com/companies/givery_technology/projects" target="_brank">採用情報</a></li>
      </ul>
      <div class="footer__mission">
        Your Growth, Our Future.
      </div>
      <div class="footer__logo">
        <img src="<?php bloginfo("template_url"); ?>/images/GiT_logo_mark.png" alt="">
      </div>
      <p class="copy">Copyright &copy; 2015 Givery.inc All Rights Reserved.</p>
    </div>
  </footer>
  <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=954478067901445&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
<?php wp_footer(); ?>
</body>
</html>
