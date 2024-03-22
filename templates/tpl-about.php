<?php
/*
  Template Name: À propos
  Description: À propos
 */

get_header();
?>
<!-- Qui sommes-nous ? -->
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
          <div class="heading_container">
          <h2><?php the_field('section_qui_sommes_nous_:_titre'); ?></h2>
            <?php $quiSommesNousLogo = get_field('section_qui_sommes_nous_:_image_'); ?>
              <img src="<?php echo $quiSommesNousLogo['url']; ?>" alt="">
          </div>
            <?php the_field('section_about'); ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>"><?php the_field('section_qui_sommes_nous_:_boutton'); ?></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <?php $imageGrand = get_field('grande_image'); ?>
                <img src="<?php echo $imageGrand['url']; ?>" alt="<?php echo $imageGrand['alt']; 
              ?>">
            </div>
            <div class="img-box b2">
              <?php $imagePetit = get_field('petite_image'); ?>
                <img src="<?php echo $imagePetit['url']; ?>" alt="<?php echo $imagePetit['alt']; 
              ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Notre mission -->
  <section class="about_service_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
          <div class="heading_container">
          <h2><?php the_field('section_notre_mission_:_titre'); ?></h2>
            <?php $missionLogo = get_field('section_notre_mission_:_logo'); ?>
              <img src="<?php echo $missionLogo['url']; ?>" alt="">
          </div>
            <?php the_field('section_notre_mission_:_texte'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <?php $imageMisssion = get_field('section_notre_mission_:_image'); ?>
                <img src="<?php echo $imageMisssion['url']; ?>" alt="<?php echo $imageMisssion['alt']; 
              ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Notre équipe -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
          <div class="heading_container">
          <h2><?php the_field('section_notre_equipe_:_titre'); ?></h2>
            <?php $equipeLogo = get_field('section_notre_equipe_:_logo'); ?>
              <img src="<?php echo $equipeLogo['url']; ?>" alt="">
          </div>
            <?php the_field('section_notre_equipe_:_contenu'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <?php $imageEquipe = get_field('section_notre_equipe_:_image'); ?>
                <img src="<?php echo $imageEquipe['url']; ?>" alt="<?php echo $imageEquipe['alt']; 
              ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Notre engagement envers la qualité -->
  <section class="about_service_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
          <div class="heading_container">
          <h2><?php the_field('section_engagement_:_titre'); ?></h2>
            <?php $engagementLogo = get_field('section_engagement_:_logo'); ?>
              <img src="<?php echo $engagementLogo['url']; ?>" alt="">
          </div>
            <?php the_field('section_engagement_:_contenu'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <?php $imageEngagement = get_field('section_engagement_:_image'); ?>
                <img src="<?php echo $imageEngagement['url']; ?>" alt="<?php echo $imageEngagement['alt']; 
              ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Nous contacter -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="detail-box">
          <div class="heading_container">
          <h2><?php the_field('section_contact_:_titre'); ?></h2>
          </div>
            <?php the_field('section_contact_:_contenu'); ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>"><?php the_field('section_contact_:_boutton'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();