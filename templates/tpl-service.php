<?php
/*
  Template Name: Service
  Description: Service
 */

get_header();
?>
<section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <?php the_field('titre_et_icone'); ?>
      </div>
      <div class="service_container">
        <?php
					$requete = new WP_Query(array
					(
						'post_type' => 'service',
						'posts_per_page' => -1,
						'order' => 'DESC',
						'orderby' => 'ID'
					));
					if ( $requete->have_posts() ) { while ($requete->have_posts())  { $requete->the_post();
				?>
        <div class="col-md-4">
            <div class="box">
            <a href="<?php the_permalink(); ?>">
              <div class="img-box">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img1" alt="<?php the_title_attribute(); ?>">
              </div>
              <div class="detail-box">
                <h5><?php the_title(); ?></h5>
                <?php the_excerpt(); ?>
              </div>
              </a>
            </div>
            </div>
				<?php 
					} } 
					wp_reset_postdata(); 
				?>		
        </div>
    </div>
  </section>
<?php get_footer();