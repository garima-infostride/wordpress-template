<?php
/**
 Template Name: Events
 
 */

get_header();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
              
              <img src="<?php the_field('image_1'); ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php the_field('heading_1') ?></a></h5>
                <p class="fst-italic text-center"><?php the_field('sub_heading_1') ?></p>
                <p class="card-text"><?php the_field('description_1') ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
             
                <img src="<?php the_field('image_2'); ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php the_field('heading_2') ?></a></h5>
                <p class="fst-italic text-center"><?php the_field('sub_heading_2') ?></p>
                <p class="card-text"><?php the_field('description_2') ?></p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

<?php
  get_footer();