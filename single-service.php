<?php get_header(); ?>
	<section class="about_section layout_padding">
		<div class="container ">
			<div class="row">
			<div class="col-md-8">
				<div class="d-flex justify-content-center mb-5 ">
					<?php the_post_thumbnail(); ?>
				</div>
				<h1 class="mb-3"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<h2>Nos autres services</h2>
				<ul>
					<?php
					$idpage = get_the_ID();
					$otherservices = new WP_Query(array(
						'post_type' => 'service',
						'post__not_in' => array($idpage),
						'posts_per_page' => -1,
						'order' => 'DESC',
						'orderby' => 'ID'
					));
					if ($otherservices->have_posts()) {
						while ($otherservices->have_posts()) {
						$otherservices->the_post();
					?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php
						}
					}
					wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</section>
<?php get_footer(); ?>