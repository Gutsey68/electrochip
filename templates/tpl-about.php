<?php
/*
  Template Name: À propos
  Description: À propos
 */

get_header();
?>
<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <?php the_field('section_about'); ?>
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
<?php get_footer();