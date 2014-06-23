<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div itemscope itemtype="http://schema.org/SmallBusiness">
	<h1 itemprop="author"><?php the_title(); ?></h1>
	<meta itemprop="datePublished" content="<?php echo the_time('m-j-Y') ?>"><?php echo the_time('F jS, Y') ?>
	<div itemprop="review" itemscope itemtype="http://schema.org/Review">
		<div itemprop="description"><?php the_content(); ?></div>
	</div>
	<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
		<meta itemprop="worstRating" content = "1" />
		<span itemprop="ratingValue">
		<?php 
			$stars = get_options_data('formsbuilder_stars_' . $post->ID, 'stars');
			echo $stars; 
		?>
		</span>
		<meta itemprop="bestRating" content="5" />
	</div>
</div>
<?php endwhile; else: ?>
	<h3>Nothing Found!</h3>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>