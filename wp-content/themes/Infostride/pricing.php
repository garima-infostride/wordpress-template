<?php
/**
 Template Name: Pricing
 
 */

get_header();
?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php
        $count_args = array(
          'post_type'    => 'pricing',
          'posts_per_page'    => 4
        );
        $count_posts = new WP_Query($count_args);
        while ($count_posts->have_posts()) {
          $count_posts->the_post();
        ?>

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3><?php  the_title(); ?></h3>
              <h4><?php the_field('price'); ?> <span> <?php the_field('price_validity'); ?></span></h4>
              <ul>
                <?php the_content(); ?>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy"><?php the_field('button_text'); ?></a>
              </div>
            </div>
          </div>
        <?php 
          }
				  // Reset Query
				  wp_reset_query();
        ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->

<?php 
get_footer(); ?> 
