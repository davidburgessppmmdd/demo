<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php endwhile; else: ?>
	<h3>Nothing Found!</h3>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>