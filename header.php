<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php wp_head(); ?>
</head>

<body class="<?php if (!is_front_page()) echo 'sub_page'; ?>">
  <div class="hero_area">
    <!-- Header  -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php $imageLogo = get_field('logo', 'options'); ?>
            <img src="<?php echo $imageLogo['url']; ?>" alt="<?php echo $imageLogo['alt'];
                                                              ?>">
            <span>Electrochip</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <?php
              wp_nav_menu(array(
                'theme_location'  => 'Header',
                'depth'           => 2,
                'container'       => 'div',
                'container_class' => 'navbar-nav',
                'menu_class'      => 'navbar-nav mr-auto',
                'menu_id' => '',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ));
              ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <?php if (!is_front_page()) : ?>
  </div><?php endif; ?>