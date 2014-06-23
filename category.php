<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="site-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<article class="post entry" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">	
			<h3 itemprop="headline">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<time class="entry-time" itemprop="datePublished" datetime="<?php echo the_time('m-j-Y') ?>">
				<?php echo the_time('F j, Y') ?>
			</time> by 
			<span class="entry-author" itemprop="author" itemscope itemptype="http://schema.org/Person">
				<?php the_author_posts_link() ?>
			</span>
			<div class="entry-content" itemprop="text">
				<?php the_excerpt(); ?>
			</div>
		</article>
	</main>
<?php endwhile; else: ?>
<?php // if no post content, display a message here ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>