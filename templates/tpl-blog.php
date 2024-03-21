<?php
/*
  Template Name: Blog
  Description: Blog
 */

get_header();
?>
<section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2><?php the_title() ?></h2>
        <?php $image = get_field('icone'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; 
        ?>">
      </div>
      <div class="row">
        <?php
          $last = new WP_Query(array
          (
            'posts_per_page' => -1,
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
  </section>
<?php get_footer();