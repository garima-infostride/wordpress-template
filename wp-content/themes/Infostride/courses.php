<?php
/**
 Template Name: Courses
 
 */

get_header();
?>

<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
          <?php if (have_rows('course_fields')) :
          while (have_rows('course_fields')) : the_row(); ?>

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

  </main><!-- End #main -->

<?php
  get_footer();