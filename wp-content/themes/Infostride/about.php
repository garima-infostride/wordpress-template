<?php
/**
 Template Name: About
 
 */

get_header();
the_post();
?>


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <?php if (have_rows('about_field')) :
          while (have_rows('about_field')) : the_row(); ?>
          
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php  the_sub_field('about_image') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php  the_sub_field('heading') ?></h3>
              <p class="fst-italic">
              <?php  the_sub_field('sub_heading') ?>
              </p>
            <ul>
              <li><i class="bi bi-check-circle"></i><?php  the_sub_field('first_bullet_content') ?></li>
              <li><i class="bi bi-check-circle"></i><?php  the_sub_field('second_bullet_content') ?></li>
              <li><i class="bi bi-check-circle"></i><?php  the_sub_field('third_bullet_content') ?></li>
            </ul>
            <p>
            <?php  the_sub_field('more_content') ?>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

          </div>
        </div>
        <?php endwhile;?>
        <?php endif;?> 
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
        <?php if (have_rows('about_count')) :
        while (have_rows('about_count')) : the_row(); ?>
          
        
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php the_sub_field('count_num_1'); ?>" data-purecounter-duration="1" 
            class="purecounter"> </span>
            <p><?php the_sub_field('count_text_1'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php the_sub_field('count_num_2'); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php the_sub_field('count_text_2'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php the_sub_field('count_num_3'); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php the_sub_field('count_text_3'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php the_sub_field('count_num_4'); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php the_sub_field('count_text_4'); ?></p>
          </div>
          <?php endwhile;?>
          <?php endif;?>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
      <?php if (have_rows('testinomial')) :
        while (have_rows('testinomial')) : the_row(); ?>

        <div class="section-title">
          <h2><?php the_sub_field('heading_main') ?></h2>
          <p><?php the_sub_field('sub_heading') ?></p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?php the_sub_field('first_field_image') ?>" class="testimonial-img" alt="">
                  <h3><?php the_sub_field('first_field_heading') ?></h3>
                  <h4><?php the_sub_field('first_field_sub_heading') ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php the_sub_field('first_field_description') ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="<?php the_sub_field('second_field_image') ?>" class="testimonial-img" alt="">
                  <h3><?php the_sub_field('second_field_heading') ?></h3>
                  <h4><?php the_sub_field('second_field_sub_heading') ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php the_sub_field('second_field_description') ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="<?php the_sub_field('third_field_image') ?>" class="testimonial-img" alt="">
                  <h3><?php the_sub_field('third_field_heading') ?></h3>
                  <h4><?php the_sub_field('third_field_sub_heading_') ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php the_sub_field('third_field_description') ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="<?php the_sub_field('fourth_field_image') ?>" class="testimonial-img" alt="">
                  <h3><?php the_sub_field('fourth_field_heading') ?></h3>
                  <h4><?php the_sub_field('fourth_field_sub_heading') ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php the_sub_field('fourth_field_description') ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="<?php the_sub_field('fifth_field_image') ?>" class="testimonial-img" alt="">
                  <h3><?php the_sub_field('fifth_field_heading') ?></h3>
                  <h4><?php the_sub_field('fifth_field_sub_heading') ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php the_sub_field('fifth_field_description') ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <?php endwhile;?>
          <?php endif;?>
      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->
  <?php
  get_footer();