<?php get_header(); ?>

<div class="container">
			<div class="row">
				<div class="">
					<div class="">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="">
							<div class="">
								<div class="">
									<div class="data__posted">Posté le <?php the_time('d/m/Y'); ?> par: <?php the_author(); ?></div>
								</div>
							</div>
							<h1 class=""><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<div class="">
								<div class="">
									<ul class="">
										<li><a target="_blank" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=api_studio" class="icon-twitter-logo-button"><i class="fa-brands fa-x-twitter"></i></a></li>
										<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="icon-facebook-logo-button"></a><i class="fa-brands fa-facebook-f"></i></li>
										<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="icon-instagram-logo"></a><i class="fa-brands fa-instagram"></i></li>
									</ul>
								</div>
							</div>
						</div>
                        <?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>