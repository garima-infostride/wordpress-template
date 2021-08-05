<?php get_header(); ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
      <?php
      if(have_posts()){
          while(have_posts()){
              the_post();
          
      
      ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?><p> </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-8">
      
      <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
		<img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="" />
        <?php if (have_rows('fields')) :
        while (have_rows('fields')) : the_row(); ?>
        <h3><?php the_sub_field('heading'); ?></h3>
        <p>
        <?php the_sub_field('description'); ?>
        </p>
      </div>
      <div class="col-lg-4">

        <div class="course-info d-flex justify-content-between align-items-center">
          <h5>Trainer</h5>
          <p><a href="#"><?php the_sub_field('trainer'); ?></a></p>
        </div>

        <div class="course-info d-flex justify-content-between align-items-center">
          <h5>Course Fee</h5>
          <p><?php the_sub_field('course_fee'); ?></p>
        </div>

        <div class="course-info d-flex justify-content-between align-items-center">
          <h5>Available Seats</h5>
          <p><?php the_sub_field('available_seats'); ?></p>
        </div>

        <div class="course-info d-flex justify-content-between align-items-center">
          <h5>Schedule</h5>
          <p><?php the_sub_field('schedule'); ?></p>
        </div>
        <?php endwhile;?>
          <?php endif;?>
      </div>
    </div>

  </div>
</section><!-- End Cource Details Section -->

<!-- ======= Cource Details Tabs Section ======= -->
<section id="cource-details-tabs" class="cource-details-tabs">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <?php if (have_rows('fields')) :
        while (have_rows('fields')) : the_row(); ?>
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1"><?php the_sub_field('one'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-2"><?php the_sub_field('two'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-3"><?php the_sub_field('three'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-4"><?php the_sub_field('four'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-5"><?php the_sub_field('five'); ?></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3><?php the_sub_field('sup_heading'); ?></h3>
                <p class="fst-italic"><?php the_sub_field('sub_heading'); ?></p>
                <p><?php the_sub_field('description'); ?></p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php endwhile;?>
          <?php endif;?>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</section><!-- End Cource Details Tabs Section -->

</main><!-- End #main -->