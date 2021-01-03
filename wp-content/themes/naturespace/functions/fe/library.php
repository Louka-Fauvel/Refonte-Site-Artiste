<?php 
/**
 * Library of Theme options functions.
 * @package NatureSpace
 * @since NatureSpace 1.0.0
*/

// Display Breadcrumb navigation
function naturespace_get_breadcrumb() { 
		if (get_theme_mod('naturespace_display_breadcrumb', naturespace_default_options('naturespace_display_breadcrumb')) != 'Hide') { ?>
		<?php if(function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">', 'naturespace'); ?><?php bcn_display(); ?><?php _e('</p>', 'naturespace');} ?>
<?php } 
} 

// Display featured images on single posts
function naturespace_get_display_image_post() { 
		if (get_theme_mod('naturespace_display_image_post', naturespace_default_options('naturespace_display_image_post')) == '' || get_theme_mod('naturespace_display_image_post', naturespace_default_options('naturespace_display_image_post')) == 'Display') { ?>
		<?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
<?php } 
}

// Display featured images on pages
function naturespace_get_display_image_page() { 
		if (get_theme_mod('naturespace_display_image_page', naturespace_default_options('naturespace_display_image_page')) == '' || get_theme_mod('naturespace_display_image_page', naturespace_default_options('naturespace_display_image_page')) == 'Display') { ?>
		<?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
<?php } 
} ?>