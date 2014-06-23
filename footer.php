<?php 
global $site_url; //Needed for URL variable reference from functions.php file ?>
<footer itemscope itemtype="http://schema.org/WPFooter">
	<?php echo footer_menu(); ?>
	<?php echo footer_logo(); ?>
	<?php echo footer_socials(); ?>
	<?php echo show_googlemap(); ?>
	<?php echo show_address(); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>