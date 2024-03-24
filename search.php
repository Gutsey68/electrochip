<?php get_header(); ?>
<section class="about_section layout_padding">
    <div class="container ">
        <div class="row">
            <div class="col-12 fw-bold">
                <h1>Votre recherche : </h1>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-12">
                        <div class="resultat p-3">
                            <a href="<?php the_permalink(); ?>">
                                <p class="lead"><?php the_title(); ?></p>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>