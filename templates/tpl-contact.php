<?php
/*
Template Name: Contact
Description: Contact
*/

get_header();
?>
<section class="contact_section layout_padding">
  <div class="container ">
    <div class="heading_container">
      <?php the_field('titre_et_icone_'); ?>
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
            <?php the_field('map'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
