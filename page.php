<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="site-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">
	<h1 itemprop="headline"><?php the_title(); ?></h1>
	<meta itemprop="datePublished" content="<?php echo the_time('m-j-Y') ?>">
	<div itemprop="publisher" itemscope="" itemtype="http://schema.org/<?php echo get_options_data('contact-info', 'business-type'); ?>">
		<span itemprop="author">
			<?php the_author_posts_link() ?>
		</span>
	</div>
	<div itemprop="text">
		<?php the_content(); ?>
	</div>
</main>
<?php endwhile; else: ?>
	<h3>Nothing Found!</h3>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>