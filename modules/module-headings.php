<?php
// Do not edit this file. It's generated by `jetpack/tools/build-module-headings-translations.php`

/**
 * For a given module, return an array with translated name and description.
 *
 * @param string $key Module file name without .php
 *
 * @return array
 */
function jetpack_get_module_i18n( $key ) {
	static $modules;
	if ( ! isset( $modules ) ) {
		$modules = array(
			'carousel' => array(
				'name' => _x( 'Carousel', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display images and galleries in a gorgeous, full-screen browsing experience', 'Module Description', 'jetpack' ),
			),

			'comments' => array(
				'name' => _x( 'Comments', 'Module Name', 'jetpack' ),
				'description' => _x( 'Let visitors use a WordPress.com, Twitter, Facebook, or Google account to comment', 'Module Description', 'jetpack' ),
			),

			'contact-form' => array(
				'name' => _x( 'Contact Form', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add a customizable contact form to any post or page using the Jetpack Form Block.', 'Module Description', 'jetpack' ),
			),

			'copy-post' => array(
				'name' => _x( 'Copy Post', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable the option to copy entire posts and pages, including tags and settings', 'Module Description', 'jetpack' ),
			),

			'custom-content-types' => array(
				'name' => _x( 'Custom content types', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display different types of content on your site with custom content types.', 'Module Description', 'jetpack' ),
			),

			'custom-css' => array(
				'name' => _x( 'Custom CSS', 'Module Name', 'jetpack' ),
				'description' => _x( 'Adds options for CSS preprocessor use, disabling the theme\'s CSS, or custom image width.', 'Module Description', 'jetpack' ),
			),

			'enhanced-distribution' => array(
				'name' => _x( 'Enhanced Distribution', 'Module Name', 'jetpack' ),
				'description' => _x( 'Increase reach and traffic.', 'Module Description', 'jetpack' ),
			),

			'google-analytics' => array(
				'name' => _x( 'Google Analytics', 'Module Name', 'jetpack' ),
				'description' => _x( 'Set up Google Analytics without touching a line of code.', 'Module Description', 'jetpack' ),
			),

			'gravatar-hovercards' => array(
				'name' => _x( 'Gravatar Hovercards', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable pop-up business cards over commenters’ Gravatars.', 'Module Description', 'jetpack' ),
			),

			'infinite-scroll' => array(
				'name' => _x( 'Infinite Scroll', 'Module Name', 'jetpack' ),
				'description' => _x( 'Automatically load new content when a visitor scrolls', 'Module Description', 'jetpack' ),
			),

			'json-api' => array(
				'name' => _x( 'JSON API', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow applications to securely access your content.', 'Module Description', 'jetpack' ),
			),

			'latex' => array(
				'name' => _x( 'Beautiful Math', 'Module Name', 'jetpack' ),
				'description' => _x( 'Use the LaTeX markup language to write mathematical equations and formulas', 'Module Description', 'jetpack' ),
			),

			'lazy-images' => array(
				'name' => _x( 'Lazy Images', 'Module Name', 'jetpack' ),
				'description' => _x( 'Speed up your site and create a smoother viewing experience by loading images as visitors scroll down the screen, instead of all at once.', 'Module Description', 'jetpack' ),
			),

			'likes' => array(
				'name' => _x( 'Likes', 'Module Name', 'jetpack' ),
				'description' => _x( 'Give visitors an easy way to show they appreciate your content.', 'Module Description', 'jetpack' ),
			),

			'markdown' => array(
				'name' => _x( 'Markdown', 'Module Name', 'jetpack' ),
				'description' => _x( 'Write posts or pages in plain-text Markdown syntax', 'Module Description', 'jetpack' ),
			),

			'masterbar' => array(
				'name' => _x( 'WordPress.com Toolbar', 'Module Name', 'jetpack' ),
				'description' => _x( 'Replaces the admin bar with a useful toolbar to quickly manage your site via WordPress.com.', 'Module Description', 'jetpack' ),
			),

			'minileven' => array(
				'name' => _x( 'Mobile Theme', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable the Jetpack Mobile theme', 'Module Description', 'jetpack' ),
			),

			'monitor' => array(
				'name' => _x( 'Monitor', 'Module Name', 'jetpack' ),
				'description' => _x( 'Jetpack’s downtime monitoring will continuously watch your site, and alert you the moment that downtime is detected.', 'Module Description', 'jetpack' ),
			),

			'notes' => array(
				'name' => _x( 'Notifications', 'Module Name', 'jetpack' ),
				'description' => _x( 'Receive instant notifications of site comments and likes.', 'Module Description', 'jetpack' ),
			),

			'photon-cdn' => array(
				'name' => _x( 'Asset CDN', 'Module Name', 'jetpack' ),
				'description' => _x( 'Jetpack’s Site Accelerator loads your site faster by optimizing your images and serving your images and static files from our global network of servers.', 'Module Description', 'jetpack' ),
			),

			'photon' => array(
				'name' => _x( 'Image CDN', 'Module Name', 'jetpack' ),
				'description' => _x( 'Mirrors and serves your images from our free and fast image CDN, improving your site’s performance with no additional load on your servers.', 'Module Description', 'jetpack' ),
			),

			'post-by-email' => array(
				'name' => _x( 'Post by email', 'Module Name', 'jetpack' ),
				'description' => _x( 'Publish posts by sending an email', 'Module Description', 'jetpack' ),
			),

			'protect' => array(
				'name' => _x( 'Protect', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enabling brute force protection will prevent bots and hackers from attempting to log in to your website with common username and password combinations.', 'Module Description', 'jetpack' ),
			),

			'publicize' => array(
				'name' => _x( 'Publicize', 'Module Name', 'jetpack' ),
				'description' => _x( 'Publicize makes it easy to share your site’s posts on several social media networks automatically when you publish a new post.', 'Module Description', 'jetpack' ),
			),

			'pwa' => array(
				'name' => _x( 'Progressive Web Apps', 'Module Name', 'jetpack' ),
				'description' => _x( 'Speed up and improve the reliability of your site using the latest in web technology.', 'Module Description', 'jetpack' ),
			),

			'related-posts' => array(
				'name' => _x( 'Related posts', 'Module Name', 'jetpack' ),
				'description' => _x( 'Keep visitors engaged on your blog by highlighting relevant and new content at the bottom of each published post.', 'Module Description', 'jetpack' ),
			),

			'search' => array(
				'name' => _x( 'Search', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enhanced search, powered by Elasticsearch, a powerful replacement for WordPress search.', 'Module Description', 'jetpack' ),
			),

			'seo-tools' => array(
				'name' => _x( 'SEO Tools', 'Module Name', 'jetpack' ),
				'description' => _x( 'Better results on search engines and social media.', 'Module Description', 'jetpack' ),
			),

			'sharedaddy' => array(
				'name' => _x( 'Sharing', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add Twitter, Facebook and Google+ buttons at the bottom of each post, making it easy for visitors to share your content.', 'Module Description', 'jetpack' ),
			),

			'shortcodes' => array(
				'name' => _x( 'Shortcode Embeds', 'Module Name', 'jetpack' ),
				'description' => _x( 'Shortcodes are WordPress-specific markup that let you add media from popular sites. This feature is no longer necessary as the editor now handles media embeds rather gracefully.', 'Module Description', 'jetpack' ),
			),

			'shortlinks' => array(
				'name' => _x( 'WP.me Shortlinks', 'Module Name', 'jetpack' ),
				'description' => _x( 'Generates shorter links so you can have more space to write on social media sites.', 'Module Description', 'jetpack' ),
			),

			'sitemaps' => array(
				'name' => _x( 'Sitemaps', 'Module Name', 'jetpack' ),
				'description' => _x( 'Make it easy for search engines to find your site.', 'Module Description', 'jetpack' ),
			),

			'sso' => array(
				'name' => _x( 'Secure Sign On', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow users to log in to this site using WordPress.com accounts', 'Module Description', 'jetpack' ),
			),

			'stats' => array(
				'name' => _x( 'Site Stats', 'Module Name', 'jetpack' ),
				'description' => _x( 'Collect valuable traffic stats and insights.', 'Module Description', 'jetpack' ),
			),

			'subscriptions' => array(
				'name' => _x( 'Subscriptions', 'Module Name', 'jetpack' ),
				'description' => _x( 'Let visitors subscribe to new posts and comments via email', 'Module Description', 'jetpack' ),
			),

			'tiled-gallery' => array(
				'name' => _x( 'Tiled Galleries', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display image galleries in a variety of elegant arrangements.', 'Module Description', 'jetpack' ),
			),

			'vaultpress' => array(
				'name' => _x( 'Backups and Scanning', 'Module Name', 'jetpack' ),
				'description' => _x( 'Protect your site with daily or real-time backups and automated virus scanning and threat detection.', 'Module Description', 'jetpack' ),
			),

			'verification-tools' => array(
				'name' => _x( 'Site verification', 'Module Name', 'jetpack' ),
				'description' => _x( 'Establish your site\'s authenticity with external services.', 'Module Description', 'jetpack' ),
			),

			'videopress' => array(
				'name' => _x( 'VideoPress', 'Module Name', 'jetpack' ),
				'description' => _x( 'Save on hosting storage and bandwidth costs by streaming fast, ad-free video from our global network.', 'Module Description', 'jetpack' ),
			),

			'widget-visibility' => array(
				'name' => _x( 'Widget Visibility', 'Module Name', 'jetpack' ),
				'description' => _x( 'Control where widgets appear on your site.', 'Module Description', 'jetpack' ),
			),

			'widgets' => array(
				'name' => _x( 'Extra Sidebar Widgets', 'Module Name', 'jetpack' ),
				'description' => _x( 'Provides additional widgets for use on your site.', 'Module Description', 'jetpack' ),
			),

			'wordads' => array(
				'name' => _x( 'Ads', 'Module Name', 'jetpack' ),
				'description' => _x( 'Earn income by allowing Jetpack to display high quality ads.', 'Module Description', 'jetpack' ),
			),
		);
	}
	return $modules[ $key ];
}
/**
 * For a given module tag, return its translated version.
 *
 * @param string $key Module tag as is in each module heading.
 *
 * @return string
 */
function jetpack_get_module_i18n_tag( $key ) {
	static $module_tags;
	if ( ! isset( $module_tags ) ) {
		$module_tags = array(
			// Modules with `Other` tag:
			//  - modules/contact-form.php
			//  - modules/notes.php
			'Other' =>_x( 'Other', 'Module Tag', 'jetpack' ),

			// Modules with `Photos and Videos` tag:
			//  - modules/carousel.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/shortcodes.php
			//  - modules/tiled-gallery.php
			//  - modules/videopress.php
			'Photos and Videos' =>_x( 'Photos and Videos', 'Module Tag', 'jetpack' ),

			// Modules with `Social` tag:
			//  - modules/comments.php
			//  - modules/gravatar-hovercards.php
			//  - modules/likes.php
			//  - modules/publicize.php
			//  - modules/seo-tools.php
			//  - modules/sharedaddy.php
			//  - modules/shortcodes.php
			//  - modules/shortlinks.php
			//  - modules/subscriptions.php
			//  - modules/widgets.php
			'Social' =>_x( 'Social', 'Module Tag', 'jetpack' ),

			// Modules with `Writing` tag:
			//  - modules/copy-post.php
			//  - modules/custom-content-types.php
			//  - modules/enhanced-distribution.php
			//  - modules/json-api.php
			//  - modules/latex.php
			//  - modules/markdown.php
			//  - modules/post-by-email.php
			//  - modules/shortcodes.php
			'Writing' =>_x( 'Writing', 'Module Tag', 'jetpack' ),

			// Modules with `Appearance` tag:
			//  - modules/custom-css.php
			//  - modules/gravatar-hovercards.php
			//  - modules/infinite-scroll.php
			//  - modules/lazy-images.php
			//  - modules/minileven.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/seo-tools.php
			//  - modules/shortcodes.php
			//  - modules/widget-visibility.php
			//  - modules/widgets.php
			//  - modules/wordads.php
			'Appearance' =>_x( 'Appearance', 'Module Tag', 'jetpack' ),

			// Modules with `Developers` tag:
			//  - modules/json-api.php
			//  - modules/pwa.php
			//  - modules/sso.php
			'Developers' =>_x( 'Developers', 'Module Tag', 'jetpack' ),

			// Modules with `Recommended` tag:
			//  - modules/lazy-images.php
			//  - modules/minileven.php
			//  - modules/monitor.php
			//  - modules/photon-cdn.php
			//  - modules/photon.php
			//  - modules/protect.php
			//  - modules/publicize.php
			//  - modules/related-posts.php
			//  - modules/sharedaddy.php
			//  - modules/sitemaps.php
			//  - modules/stats.php
			'Recommended' =>_x( 'Recommended', 'Module Tag', 'jetpack' ),

			// Modules with `General` tag:
			//  - modules/masterbar.php
			'General' =>_x( 'General', 'Module Tag', 'jetpack' ),

			// Modules with `Mobile` tag:
			//  - modules/minileven.php
			'Mobile' =>_x( 'Mobile', 'Module Tag', 'jetpack' ),

			// Modules with `Traffic` tag:
			//  - modules/sitemaps.php
			//  - modules/wordads.php
			'Traffic' =>_x( 'Traffic', 'Module Tag', 'jetpack' ),

			// Modules with `Site Stats` tag:
			//  - modules/stats.php
			'Site Stats' =>_x( 'Site Stats', 'Module Tag', 'jetpack' ),
		);
	}
	return ! empty( $module_tags[ $key ] ) ? $module_tags[ $key ] : '';
}
