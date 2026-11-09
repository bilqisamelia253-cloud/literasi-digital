<?php
/**
 * Starter content for fresh installs.
 *
 * @package WiseTech_Core_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register starter content.
 */
function wisetech_core_theme_register_starter_content() {
	add_theme_support(
		'starter-content',
		array(
			'attachments' => array(
				'demo_featured_1' => array(
					'post_title' => _x( 'Sample Featured Image', 'Theme starter content', 'wisetech-core' ),
					'file'       => 'assets/images/starter/demo-1.jpg',
				),
				'demo_featured_2' => array(
					'post_title' => _x( 'Sample Image Two', 'Theme starter content', 'wisetech-core' ),
					'file'       => 'assets/images/starter/demo-2.jpg',
				),
				'demo_featured_3' => array(
					'post_title' => _x( 'Sample Image Three', 'Theme starter content', 'wisetech-core' ),
					'file'       => 'assets/images/starter/demo-3.jpg',
				),
				'demo_featured_4' => array(
					'post_title' => _x( 'Sample Image Four', 'Theme starter content', 'wisetech-core' ),
					'file'       => 'assets/images/starter/demo-4.jpg',
				),
			),
			'posts' => array(
				'page_about' => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'About', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'about',
					'post_content' => '<p>' . __( 'WiseTech Core is built for fast technology websites: software reviews, tutorials, comparison pages, and content-driven publications. Use this page to introduce your editorial mission, your team, or your expertise.', 'wisetech-core' ) . '</p><p>' . __( 'Because this is starter content, you can edit or delete it any time.', 'wisetech-core' ) . '</p>',
				),
				'page_contact' => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'Contact', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'contact',
					'post_content' => '<p>' . __( 'Add your preferred contact method here: email, a contact form, social media, or your business address.', 'wisetech-core' ) . '</p><ul><li>' . __( 'Email: hello@example.com', 'wisetech-core' ) . '</li><li>' . __( 'Editorial inquiries: editor@example.com', 'wisetech-core' ) . '</li></ul>',
				),
				'post_ai_referral' => array(
					'post_type'    => 'post',
					'post_title'   => _x( 'Sample Featured Post', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'how-ai-referral-traffic-works',
					'post_excerpt' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi in porta euismod.', 'wisetech-core' ),
					'post_content' => '<p>' . __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum ipsum eu laoreet pulvinar.', 'wisetech-core' ) . '</p><p>' . __( 'Pellentesque vitae ipsum non augue porta tincidunt. Donec eget orci eget urna gravida tristique.', 'wisetech-core' ) . '</p><p>' . __( 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.', 'wisetech-core' ) . '</p>',
					'thumbnail'    => '{{demo_featured_1}}',
				),
				'post_wp_speed' => array(
					'post_type'    => 'post',
					'post_title'   => _x( 'Another Sample Article', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'best-wordpress-performance-fixes',
					'post_excerpt' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat magna eget risus.', 'wisetech-core' ),
					'post_content' => '<p>' . __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum pretium orci, et dignissim erat.', 'wisetech-core' ) . '</p><p>' . __( 'Ut condimentum, nisi at ultrices feugiat, purus justo aliquet nulla, non sodales turpis sapien et ante.', 'wisetech-core' ) . '</p>',
					'thumbnail'    => '{{demo_featured_2}}',
				),
				'post_seo_stack' => array(
					'post_type'    => 'post',
					'post_title'   => _x( 'Example Blog Post', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'seo-stack-for-small-teams',
					'post_excerpt' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue non sem tempor.', 'wisetech-core' ),
					'post_content' => '<p>' . __( 'Duis mattis, justo vel suscipit pharetra, lacus mauris commodo arcu, sed ultrices orci libero in purus.', 'wisetech-core' ) . '</p><p>' . __( 'Nam at odio finibus, volutpat erat et, malesuada sapien. Morbi sagittis justo sit amet dui.', 'wisetech-core' ) . '</p>',
					'thumbnail'    => '{{demo_featured_3}}',
				),
				'post_site_architecture' => array(
					'post_type'    => 'post',
					'post_title'   => _x( 'Sample Article Title', 'Theme starter content', 'wisetech-core' ),
					'post_name'    => 'plan-a-simple-tech-website-architecture',
					'post_excerpt' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in orci sed velit posuere.', 'wisetech-core' ),
					'post_content' => '<p>' . __( 'Aliquam et lectus sit amet nibh hendrerit tempor in sit amet leo. Donec id ipsum tortor.', 'wisetech-core' ) . '</p><p>' . __( 'Aenean sit amet sapien facilisis, efficitur ligula nec, rutrum lectus. Integer maximus accumsan nisl.', 'wisetech-core' ) . '</p>',
					'thumbnail'    => '{{demo_featured_4}}',
				),
			),
			'nav_menus' => array(
				'primary' => array(
					'name'  => __( 'Primary Menu', 'wisetech-core' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_contact',
					),
				),
				'footer' => array(
					'name'  => __( 'Footer Menu', 'wisetech-core' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_contact',
					),
				),
			),
			'options' => array(
				'show_on_front' => 'posts',
			),
		)
	);
}
add_action( 'after_setup_theme', 'wisetech_core_theme_register_starter_content', 20 );
