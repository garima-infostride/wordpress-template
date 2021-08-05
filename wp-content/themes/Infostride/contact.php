<?php
/**
 Template Name: Contact
 
 */

get_header();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <?php dynamic_sidebar('contact-1'); ?>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">
      <div class="col-lg-4">
        <?php dynamic_sidebar('contact-2'); ?>
      </div>
      <div class="col-lg-8 mt-5  mt-lg-0 ">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="color:gray;">
          <?php echo do_shortcode('[contact-form-7 id="1159" title="Contact form"]');?>
        </form>
      </div>
    </div>
    
  </div>
</section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php
  get_footer();