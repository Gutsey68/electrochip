<?php get_header(); ?>
<main>
	<div>
		<div class="container container-lg-fluid">
			<div class="row">
				<div class="col-12 col-md-8 col-lg-8">
					<div>
						<div>
							<div>
								<div>
									<div><?php the_post_thumbnail(); ?></div>
									<h1><?php the_title(); ?></h1>
								</div>
							</div>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div>
						<div>
							<div>
								<div>
									<div>Mes services</div>
									<div>
										<ul>
											<?php
											// Je récupère l'ID de la page en cours
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>