<?php
/**
 Template Name: Trainers
 
 */

get_header();
?>

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
      <?php
              $post_7=get_post(523);
              $title=$post_7->post_title;
              $content=$post_7->post_content;
              $link=get_permalink(523);
              ?>
        <h2><?php echo $title; ?></h2>
        <p><?php echo $content; ?></p>
     
          </div>
    </div><!-- End Breadcrumbs -->

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

<?php
  get_footer();