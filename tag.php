<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php // post content goes here ?>
<?php endwhile; else: ?>
<?php // if no post content, display a message here ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>