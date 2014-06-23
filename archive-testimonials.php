<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
	<small><?php echo the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
	<?php 
		$stars = get_options_data('formsbuilder_stars_' . $post->ID, 'stars');
		echo $stars; 
	?>
<?php endwhile; else: ?>
	<h3>Nothing Found!</h3>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>