<section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <?php $imageAdresse = get_field('img_adresse', 'options'); ?>
                <img src="<?php echo $imageAdresse['url']; ?>" alt="<?php echo $imageAdresse['alt']; 
              ?>">
              <span><?php the_field('adresse', 'options'); ?></span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <?php $imagePhone = get_field('img-phone', 'options'); ?>
                <img src="<?php echo $imagePhone['url']; ?>" alt="<?php echo $imagePhone['alt']; 
              ?>">
              <span>Téléphone : <?php the_field('telephone', 'options'); ?></span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <?php $imageMail = get_field('img-mail', 'options'); ?>
                <img src="<?php echo $imageMail['url']; ?>" alt="<?php echo $imageMail['alt']; 
              ?>">
              <span><?php the_field('mail', 'options'); ?></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form method="get" action="<?php echo home_url(); ?>">
              <input type="text" name="s" id="s" placeholder="Ma recherche">
              <button type="submit">Rechercher</button>
            </form>
            <?php the_content();?>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <?php the_field('facebook', 'options'); ?>
            </div>
            <div>
              <?php the_field('twitter', 'options'); ?>
            </div>
            <div>
              <?php the_field('linkedin', 'options'); ?>
            </div>
            <div>
              <?php the_field('instagram', 'options'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p> &copy; <?php echo date('Y'); ?> All Rights Reserved By <a href="https://www.seyzeriat.fr/">Gauthier Seyzeriat--Meyer</a></p>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>

</body>

</html>