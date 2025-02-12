<?php
/**
 * The category archive template file.
 * @package NatureSpace
 * @since NatureSpace 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if ( have_posts() ) : ?>
  <div class="container">
  <div id="main-content">
    <div class="content-headline">
      <h1 class="entry-headline"><?php single_cat_title(); ?></h1>
<?php naturespace_get_breadcrumb(); ?>
    </div>
<?php if ( category_description() ) : ?><div class="archive-meta"><?php echo category_description(); ?></div><?php endif; ?>
    <div id="content"<?php if (get_theme_mod('naturespace_post_entry_format', naturespace_default_options('naturespace_post_entry_format')) == 'Grid - Masonry') { ?> class="js-masonry"<?php } ?>> 
<?php while (have_posts()) : the_post(); ?>      
<?php if (get_theme_mod('naturespace_post_entry_format', naturespace_default_options('naturespace_post_entry_format')) == 'Grid - Masonry') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; endif; ?>
    </div> <!-- end of content -->
<?php naturespace_content_nav( 'nav-below' ); ?>
  </div>
<?php if (get_theme_mod('naturespace_display_sidebar_archives', naturespace_default_options('naturespace_display_sidebar_archives')) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>