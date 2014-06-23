<?php 
	//Setting Global Variables
		//This is to reduce the number of get_bloginfo() calls and *hopefully* reduce server load a bit
	//global $site_url; //Call this into the files you need
	$site_url = get_bloginfo('url');
	global $theme_folder; //Call this into the files you need
	$theme_folder = $site_url . '/wp-content/themes/demo';
	//End Global Variables
	function stylesheets() {
		global $site_url;
		global $theme_folder;
	?>
		<link rel="stylesheet" href="<?php echo $theme_folder ?>/assets/style.css">
	<?php } //End Stylesheets Function
	function header_logo() { global $site_url; ?>
		<a href="<?php echo $site_url; ?>"><img src="<?php echo get_options_data('theme-options', 'header-logo'); ?>" /></a>
	<?php } //End Header Logo Function
	function footer_logo() { global $site_url; ?>
		<a href="<?php echo $site_url; ?>"><img src="<?php echo get_options_data('theme-options', 'footer-logo'); ?>" /></a>
	<?php } //End Footer Logo Function
	function show_socials() { ?>
		<?php if(get_options_data('social-media', 'show-socials') == "yes") { ?>
			<ul>
				<?php if(get_options_data('social-media', 'facebook') !="") { ?>
					<li><a href="<?php echo get_options_data('social-media', 'facebook') ?>" class="facebook"><?php if(get_options_data('social-media', 'show-social-text') == "yes") { ?>facebook<?php } ?></a></li>
				<?php } ?>
				<?php if(get_options_data('social-media', 'twitter') !="") { ?>
					<li><a href="<?php echo get_options_data('social-media', 'twitter') ?>" class="twitter"><?php if(get_options_data('social-media', 'show-social-text') == "yes") { ?>twitter<?php } ?></a></li>
				<?php } ?>
				<?php if(get_options_data('social-media', 'youtube') !="") { ?>
					<li><a href="<?php echo get_options_data('social-media', 'youtube') ?>" class="youtube"><?php if(get_options_data('social-media', 'show-social-text') == "yes") { ?>youtube<?php } ?></a></li>
				<?php } ?>
				<?php if(get_options_data('social-media', 'google') !="") { ?>
					<li><a href="<?php echo get_options_data('social-media', 'google') ?>" class="google"><?php if(get_options_data('social-media', 'show-social-text') == "yes") { ?>google+<?php } ?></a></li>
				<?php } ?>
			</ul>
		<?php } //End Show Socials Options
	} //End Show Socials Function
	function header_socials() {
		if(get_options_data('social-media', 'show-socials-in') == "header" || get_options_data('social-media', 'show-socials-in') == "both") { echo show_socials(); }
	} //End Header Socials Function
	function footer_socials() {
		if(get_options_data('social-media', 'show-socials-in') == "footer" || get_options_data('social-media', 'show-socials-in') == "both") { echo show_socials();  }
	} //End Footer Socials Function
	function show_phone() { 
		 if(get_options_data('contact-info', 'phone') != "") {
			echo stripslashes(get_options_data('contact-info', 'phone'));
		} //End Contact Info - Phone Options
	} //End Show Phone Function
	function show_fax() { 
		 if(get_options_data('contact-info', 'fax') != "") {
			echo stripslashes(get_options_data('contact-info', 'fax'));
		} //End Contact Info - Phone Options
	} //End Show Phone Function
	function show_tollfree() { 
		 if(get_options_data('contact-info', 'tollfree') != "") {
			echo stripslashes(get_options_data('contact-info', 'tollfree'));
		} //End Get TollFree Options
	} //End Toll Free Function
	function show_googlemap() {
		 if(get_options_data('options-page', 'show-google-maps') == "yes") { ?>
			<iframe src="https://www.google.com/maps/embed/v1/place?key=<?php echo get_options_data('options-page', 'google-maps-api'); ?>&q=<?php echo get_options_data('contact-info', 'company-name') ?> in <?php echo get_options_data('contact-info', 'city'); ?>, <?php echo get_options_data('contact-info', 'zip-code'); ?>"></iframe>
	 <?php	} //End Get Google Maps Options
	} //End Google Maps Function
	function show_address() { ?>
		<div itemscope itemtype="http://schema.org/LocalBusiness">
		<span itemprop="name"><?php echo get_options_data('contact-info', 'company-name') ?></span>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress"><?php echo get_options_data('contact-info', 'address1') ?><br /><?php echo get_options_data('contact-info', 'address2') ?></span>
				<span itemprop="addressLocality"><?php echo get_options_data('contact-info', 'city') ?></span>,
				<span itemprop="addressRegion"><?php echo get_options_data('contact-info', 'state') ?></span>
				<span itemprop="postalCode"><?php echo get_options_data('contact-info', 'zip-code') ?></span>
			</div>
			 Phone: <span itemprop="telephone"><?php echo get_options_data('contact-info', 'phone') ?></span>
		</div>
	<?php } //End Show Address Function
	// Register Navigation Menus
	function custom_navigation_menus() {
		$locations = array(
			'Main Menu' => __( 'Main Menu', 'text_domain' ),
			'Footer Menu' => __( 'Footer Menu', 'text_domain' ),
		);
		register_nav_menus( $locations );
	}
	// Hook into the 'init' action
	add_action( 'init', 'custom_navigation_menus' );

	function main_menu() { ?>
		<div role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php 
				wp_nav_menu( array('menu' => 'Main menu' ));
			?>
		</div>
	<?php }
	function footer_menu() { ?>
		<div role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php 
				wp_nav_menu( array('menu' => 'Footer menu' ));
			?>
		</div>
	<?php }
	// Register Sidebar
	function custom_sidebar() {
		$args = array(
			'id'            => 'Sidebar',
			'name'          => __( 'Sidebar', 'text_domain' ),
			'description'   => __( 'Sidebar', 'text_domain' ),
		);
		register_sidebar( $args );
	}
	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'custom_sidebar' );
	function show_sidebar() { ?>
		<div itemscope itemtype="http://schema.org/WPSideBar">
			<?php
				dynamic_sidebar('sidebar');
			?>
		</div>
	<?php 
	}

	/* Begin Disable Comments */
	// Disable support for comments and trackbacks in post types
	function df_disable_comments_post_types_support() {
		$post_types = get_post_types();
		foreach ($post_types as $post_type) {
			if(post_type_supports($post_type, 'comments')) {
				remove_post_type_support($post_type, 'comments');
				remove_post_type_support($post_type, 'trackbacks');
			}
		}
	}
	add_action('admin_init', 'df_disable_comments_post_types_support');

	// Close comments on the front-end
	function df_disable_comments_status() {
		return false;
	}
	add_filter('comments_open', 'df_disable_comments_status', 20, 2);
	add_filter('pings_open', 'df_disable_comments_status', 20, 2);

	// Hide existing comments
	function df_disable_comments_hide_existing_comments($comments) {
		$comments = array();
		return $comments;
	}
	add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

	// Remove comments page in menu
	function df_disable_comments_admin_menu() {
		remove_menu_page('edit-comments.php');
	}
	add_action('admin_menu', 'df_disable_comments_admin_menu');

	// Redirect any user trying to access comments page
	function df_disable_comments_admin_menu_redirect() {
		global $pagenow;
		if ($pagenow === 'edit-comments.php') {
			wp_redirect(admin_url()); exit;
		}
	}
	add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

	// Remove comments metabox from dashboard
	function df_disable_comments_dashboard() {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	}
	add_action('admin_init', 'df_disable_comments_dashboard');

	/* End Disable Comments */

	// Add email Obfuscation Shortcode
	function wpe_secure_mail($atts) {
		extract(shortcode_atts(array(
			"mailto" => get_options_data('contact-info', 'email'),
			"txt" => get_options_data('contact-info', 'email-text')
		), $atts));
		$mailto = antispambot($mailto);
		$txt = antispambot($txt);
		return '<a href="mailto:' . $mailto . '">' . $txt . '</a>';
	}

	if ( function_exists('add_shortcode') )
		add_shortcode('email', 'wpe_secure_mail');


?>