<?php
/**
 Template Name: Home
 
 */

get_header();
?>

<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex justify-content-center align-items-center">

<?php if (have_rows('header')) :
        while (have_rows('header')) : the_row(); ?>
     
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    
 
      <h1><?php the_sub_field('header_text');?><br><?php the_sub_field('header_sub_text');?></h1>
      <h2><?php the_sub_field('header_sub_text_2');?></h2>
      <a href="<?php the_sub_field('button_link');?>" class="btn-get-started"><?php the_sub_field('button');?></a>
      
    </div>
    <?php endwhile;?>
          <?php endif;?>  
  </section><!-- End Hero -->

<!-- ======= Hero Section ======= -->



<main id="main">

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php if (have_rows('about')) :
          while (have_rows('about')) : the_row(); ?>
        
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php the_sub_field('about_image') ?>" class="img-fluid" alt="">
        </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php the_sub_field('heading'); ?></h3>
            <p class="fst-italic">
            <?php the_sub_field('sub_heading'); ?>
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <?php the_sub_field('first_bullet_content'); ?></li>
              <li><i class="bi bi-check-circle"></i> <?php the_sub_field('second_bullet_content'); ?></li>
              <li><i class="bi bi-check-circle"></i> <?php the_sub_field('third_bullet_content'); ?></li>
            </ul>
            <p>
            <?php the_sub_field('more_content'); ?>
            </p>  
          </div>

          <?php endwhile;?>
          <?php endif;?>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          <?php if (have_rows('count')) :
          while (have_rows('count')) : the_row(); ?>
        
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

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

      <div class="row">
      <?php if (have_rows('why_us')) :
        while (have_rows('why_us')) : the_row(); ?>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3><?php the_sub_field('first_banner_title'); ?></h3>
              <p>
              <?php the_sub_field('first_banner_content'); ?>
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?php the_sub_field('second_banner_title'); ?></h4>
                    <p><?php the_sub_field('second_banner_content'); ?></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4><?php the_sub_field('third_banner_tilte'); ?></h4>
                    <p><?php the_sub_field('third_banner_content'); ?></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4><?php the_sub_field('fourth_banner_titlte'); ?></h4>
                    <p><?php the_sub_field('fourth_banner_content'); ?></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
          <?php endwhile;?>
          <?php endif;?>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <?php dynamic_sidebar('home-section'); ?>
      
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
      <?php if (have_rows('courses_fields')) :
        while (have_rows('courses_fields')) : the_row(); ?>

        <div class="section-title">
          <h2><?php the_sub_field('main_heading'); ?></h2>
          <p><?php the_sub_field('sub_heading'); ?></p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?php the_sub_field('first_image'); ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php the_sub_field('first_area_of_course'); ?></h4>
                  <p class="price"><?php the_sub_field('first_course_price'); ?></p>
                </div>

                <h3><a href="<?php the_sub_field('first_course_name_link'); ?>"><?php the_sub_field('first_course_name'); ?></a></h3>
                <p><?php the_sub_field('first_course_description'); ?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php the_sub_field('first_trainer_image'); ?>" class="img-fluid" alt="">
                    <span><?php the_sub_field('first_trainer_name'); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;<?php the_sub_field('first_course_seats'); ?>
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;<?php the_sub_field('first_trainer_likes'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="<?php the_sub_field('second_image'); ?>" class="img-fluid" alt="...">
              <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php the_sub_field('second_area_of_course'); ?></h4>
                  <p class="price"><?php the_sub_field('second_course_price'); ?></p>
                </div>

                <h3><a href="<?php the_sub_field('second_course_name_link'); ?>"><?php the_sub_field('second_course_name'); ?></a></h3>
                <p><?php the_sub_field('second_course_description'); ?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php the_sub_field('second_trainer_image'); ?>" class="img-fluid" alt="">
                    <span><?php the_sub_field('second_trainer_name'); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;<?php the_sub_field('second_course_seats'); ?>
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;<?php the_sub_field('second_trainer_likes'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="<?php the_sub_field('third_image'); ?>" class="img-fluid" alt="...">
              <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php the_sub_field('third_area_of_course'); ?></h4>
                  <p class="price"><?php the_sub_field('third_course_price'); ?></p>
                </div>

                <h3><a href="<?php the_sub_field('third_course_name_link'); ?>"><?php the_sub_field('third_course_name'); ?></a></h3>
                <p><?php the_sub_field('third_course_description'); ?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php the_sub_field('third_trainer_image'); ?>" class="img-fluid" alt="">
                    <span><?php the_sub_field('third_trainer_name'); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;<?php the_sub_field('third_course_seats'); ?>
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;<?php the_sub_field('third_trainer_likes'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
        <?php endwhile;?>
          <?php endif;?>
      </div>
    </section><!-- End Popular Courses Section -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
      

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $count_args = array(
          'post_type'    => 'trainer',
          'posts_per_page'    => 4
        );
        $count_posts = new WP_Query($count_args);
        while ($count_posts->have_posts()) {
          $count_posts->the_post();
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
							<img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="" />
              <div class="member-content">
                <h4><?php echo get_the_title(); ?></h4>
                <span><?php the_excerpt(); ?></span>
                <?php echo get_the_content(); ?>
                
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
    </section><!-- End Trainers Section -->


    
  </main><!-- End #main -->

  
<?php  get_footer(); ?>

