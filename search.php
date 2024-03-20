<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-6">
            <div class="resultat">
                <h1><?php the_title(); ?></h1>
                <a href="<?php the_permalink();?>">Voir ce contenu</a>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>