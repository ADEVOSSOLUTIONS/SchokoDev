<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Функции футера
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
  wp_footer();
?>
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-logo">
            <img src="<?php the_field('logo','options') ?>" alt="" class="logo">
          </div>
        </div>
        <div class="col-md-5">
          <div class="footer-second-col">
            <h5>
              ÜBER SCHOKOFONTÄNEN ZENTRALE
            </h5>
            <p>
              Unser höchstes Ziel ist es, unseren Kunden die beste Schokobrunnen Qualität am Markt bieten zu können und sie bei Events mit zuverlässigen, leisen und hygienisch reinigbaren Geräten zu 
            </p>
            <div class="social-block">
              <ul>
                <li><a href="<?php the_field('facebook_link','options') ?>"><span class="icon-facebook"></span></a></li>
                <li><a href="<?php the_field('instagram_link','options') ?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-third-col">
            <h5>GET TOUCH</h5>
            <p>Unser höchstes Ziel ist es, unseren Kunden die beste Schokobrunnen Qualität am Markt bieten</p>
            <div class="footer-info-block">
              <ul>
                <li>
                  <a href="#"><i class="icon-viber"></i><span><?php the_field('footer_phone_number','options') ?></span></a>
                  
                </li>
                <li>
                  <a href="tel:<?php the_field('footer_phone_number','options') ?>"><i class="icon-mobile"></i><span><?php the_field('footer_phone_number','options') ?></span></a>
                </li>
                <li>
                  <a href="mailto:<?php the_field('footer_email','options') ?>"><i class="icon-mail"></i><span><?php the_field('footer_email','options') ?></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Optimized loading JS Start -->
  <script>var scr = {"scripts":[
    {"src" : "<?php echo get_template_directory_uri(); ?>/js/libs.min.js", "async" : false},
    {"src" : "<?php echo get_template_directory_uri(); ?>/js/common.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
  </script>
  <!-- Optimized loading JS End -->

  </body>
</html>