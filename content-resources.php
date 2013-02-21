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

		<?php
		//Specify taxomony to be used
		$taxonomy = 'resource_categories';
		//Get array of taxonomy terms
		$taxonomy_query = get_terms($taxonomy);


		foreach ($taxonomy_query as $taxonomies => $taxonomy) {
			//Display the taxonomy name as a heading with IDanchor
			echo '<a id="' . $taxonomy->slug .  '"></a><h2 class="category-title">' . $taxonomy->name . '</h2>';
			echo '<ul class="library"><li class="entry-item">';

			//Get array of posts for taxonomy term
			$args = array(
				'post_type' => 'resources',
				'taxonomy' => 'resource_categories',
				'term' => $taxonomy->name,
				'orderby' => 'title',
				'order' => 'ASC'
			);
			$post_query = new WP_Query($args);

			if( $post_query->have_posts() ) {
			  while ($post_query->have_posts()) : $post_query->the_post(); ?>
				<h3 class="item-title">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<?php the_content(); ?>
			    
			<?php endwhile;
			}
			echo '</li></ul>';
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
