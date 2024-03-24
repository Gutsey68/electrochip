<?php get_header(); ?>
<section class="about_section layout_padding">
  <div class="container ">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-md-6">
        <?php $image404 = get_field('image_erreur_404', 'options'); ?>
        <img src="<?php echo $image404['url']; ?>" alt="<?php echo $image404['alt'];
                                                        ?>">
      </div>
      <div class="col-3"></div>
      <div class="col-12 text-center">
        <p>Oups ! Il semblerait que vous ayez touché un fil mort... Cette page est introuvable.
          Ne vous inquiétez pas, il n'y a pas de court-circuit !
          Rebranchons-nous à la
          <a href="<?php echo get_home_url(); ?>">page d'accueil </a>
          pour retrouver la connexion.
        </p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>