<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">    
          <?php dynamic_sidebar('sidebar-2'); ?>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <?php dynamic_sidebar('sidebar-1'); ?> 
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <?php dynamic_sidebar('sidebar-4'); ?>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <?php dynamic_sidebar('sidebar-3'); ?>
      </div>

    </div>
  </div>
</div>



<?php dynamic_sidebar('footer-sidebar-5'); ?>

</footer><!-- End Footer -->

<!-- <div id="preloader"></div> -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!--Vendor JS Files -->
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/purecounter/purecounter.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

</body>

</html>