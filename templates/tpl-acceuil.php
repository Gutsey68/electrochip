<?php
/*
  Template Name: Accueil
  Description: Accueil
 */

get_header();
?>
<section class=" slider_section ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="detail_box">
          <h1><?php the_field('bienvenue_titre'); ?></h1>
          <?php the_field('section'); ?>
          <a href="#contact"><?php the_field('section_de_bienvenue_:_boutton'); ?></a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 offset-lg-1">
        <div class="img_content">
          <div class="img_container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              <?php 
                $isFirstItem = true;
                if( have_rows('slider') ): while( have_rows('slider') ): the_row();
                $imgSlider = get_sub_field('img_slider');
              ?>	
                <div class="carousel-item <?php if($isFirstItem) { echo 'active'; $isFirstItem = false; } ?>">
                  <div class="img-box">
                    <img src="<?php echo $imgSlider['url']; ?>" alt="<?php echo $imgSlider['alt']; ?>">
                  </div>
                </div>
              <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- service section -->
<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2><?php the_field('service_titre'); ?></h2>
        <?php $serviceLogo = get_field('service_logo'); ?>
          <img src="<?php echo $serviceLogo['url']; ?>" alt="">
    </div>
    <div class="service_container">
    <?php
					$requete = new WP_Query(array
					(
						'post_type' => 'service',
						'posts_per_page' => 3,
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
    <div class="btn-box">
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>"><?php the_field('section_services_:_boutton'); ?></a>
    </div>
  </div>
</section>
<!-- about section -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2><?php the_field('about_titre'); ?></h2>             
            <?php $aboutLogo = get_field('about_logo'); ?>
            <img src="<?php echo $aboutLogo['url']; ?>" alt="">
          </div>
						<?php the_field('section_about_us'); ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>"><?php the_field('section_a_propos_:_boutton'); ?></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img_container">
          <div class="img-box b1">
            <?php $imageGrand = get_field('image_about'); ?>
              <img src="<?php echo $imageGrand['url']; ?>" alt="<?php echo $imageGrand['alt']; 
            ?>">
          </div>
          <div class="img-box b2">
            <?php $imagePetit = get_field('image_about_petite'); ?>
              <img src="<?php echo $imagePetit['url']; ?>" alt="<?php echo $imagePetit['alt']; 
            ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- blog section -->
<section class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container row">
      <h2><?php the_field('blog_titre'); ?></h2>
      <?php $blogLogo = get_field('blog_logo'); ?>
        <img src="<?php echo $blogLogo['url']; ?>" alt="">
    </div>
    <div class="row">
        <?php
          $last = new WP_Query(array
          (
            'posts_per_page' => 2,
            'order' => 'DESC',
            'orderby' => 'ID'
          ));
          if ( $last->have_posts() ) { while ($last->have_posts())  { $last->the_post();
          ?>
          <div class="col-md-6">
            <div class="box">
            <a href="<?php the_permalink(); ?>" class="">
              <div class="img-box">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="detail-box">
                <h5><?php the_title(); ?></h5>
                <?php the_excerpt(); ?>
              </div>
              </a>
            </div>
          </div>
        <?php } } wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="btn-box">
    <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>"><?php the_field('section_blog_:_boutton'); ?></a>
  </div>
</section>
<!-- contact section -->
<section id="contact" class="contact_section layout_padding">
  <div class="container ">
    <div class="heading_container">
      <h2><?php the_field('contact_titre'); ?></h2>
      <?php $contactLogo = get_field('contact_logo'); ?>
        <img src="<?php echo $contactLogo['url']; ?>" alt="">
      <img src="../images/plug.png" alt="">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="8f120b0" title="Formulaire de contact"]'); ?>
      </div>
      <div class="col-md-6">
        <div class="map_container">
          <div class="map-responsive">
            <?php the_field('google_map'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();