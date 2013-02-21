<?php
/**
 * The template used for displaying the Resourcs page content in page-custom.php
 *
 * @package WordPress
 * @subpackage Foghorn
 * @since Foghorn 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="leader"><?php the_title(); ?></h1>
        <?php edit_post_link( __( 'Edit', 'foghorn' ), '<span class="edit-link">', '</span>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<h2>Topics</h2>

		<!-- From functions.php - accepts the taxonomy name and outputs TOC-type nav -->
		<?php get_custom_taxonomy_list ('resource_categories'); ?>

		<?php get_template_part( 'content', 'feature' ); ?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
