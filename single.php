<?php get_header(); ?>
<section class="about_section layout_padding">
	<div class="container ">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="d-flex justify-content-center mb-5 ">
							<?php the_post_thumbnail(); ?>
						</div>
						<h1 class="mb-3"><?php the_title(); ?></h1>
						<p class="mb-3 small">Posté le <?php the_time('d/m/Y'); ?> par: <?php the_author(); ?></p>
						<?php the_content(); ?>
				<?php endwhile;
				endif; ?>
			</div>
			<div class="col-12">
				<ul class="list-unstyled">
					<li><a target="_blank" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>">Partager sur X</a></li>
					<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Partager sur Facebook</a></li>
					<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">Partager sur Linkedin</a></li>
				</ul>
			</div>
		</div>
</section>
<?php get_footer(); ?>