<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1 itemprop="headline"><?php the_title(); ?></h1>
	<meta itemprop="datePublished" content="<?php echo the_time('m-j-Y') ?>">
	<div itemprop="publisher" itemscope="" itemtype="http://schema.org/BlogPost">
		<span itemprop="author">
			<?php the_author_posts_link() ?>
		</span>
		<time class="entry-time" itemprop="datePublished" datetime="<?php echo the_time('m-j-Y') ?>">
			<?php echo the_time('F j, Y') ?>
		</time>
	</div>
	<div itemprop="text">
		<?php the_content(); ?>
	</div>
<?php endwhile; else: ?>
	<h3>Nothing Found!</h3>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>