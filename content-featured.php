<?php
/**
 * The template used for displaying homepage content
 *
 * @package WordPress
 * @subpackage Foghorn
 * @since Foghorn 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="leader">
      <?php the_title(); ?>
    </h1>
    <?php edit_post_link( __( 'Edit', 'foghorn' ), '<span class="edit-link">', '</span>' ); ?>
  </header>
  <!-- .entry-header -->
  
  <div class="entry-content">
    <p class="follower"> <?php echo get_post_meta($post->ID, 'home-page-blurb', true); ?> </p>
    
    <!-- If it's the front page, show any sticky posts -->
    <?php
		/**
		 * Begin the featured posts section.
		 *
		 * See if we have any sticky posts and use them to create our featured posts.
		 * We limit the featured posts at ten.
		 */
		$sticky = get_option( 'sticky_posts' );

		// Proceed only if sticky posts exist.
		if ( ! empty( $sticky ) ) :

		$featured_args = array(
			'post__in' => $sticky,
			'post_status' => 'publish',
			'posts_per_page' => 5,
			'no_found_rows' => true,
		);

		// The Featured Posts query.
		$featured = new WP_Query( $featured_args );

		// Proceed only if published posts exist
		if ( $featured->have_posts() ) :
	?>
    <?php
	// Let's roll.
	while ( $featured->have_posts() ) : $featured->the_post();

	?>

    <?php
		// Show slider only if we have more than one featured post.
		if ( $featured->post_count >= 1 ) :
	?>
    <div class="feature">
      <h2 class="feature-title">Newswire:</h2>
      <p>
        <button class="feature-next">▸</button>
        <button class="feature-back disabled">◂</button>
      </p>
      <h3 class="feature-headline"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" rel="bookmark">
        <?php the_excerpt(); ?>
        </a></h3>
    </div>
    <!-- .featured-posts -->
        <?php endwhile;	?>
    <?php endif; // End check for more than one sticky post. ?>

  <!-- .featured-posts -->
  <?php endif; // End check for published posts. ?>
  <?php endif; // End check for sticky posts. ?>

  <?php wp_reset_query(); ?> 

  <?php the_content(); ?>
  </div>
  <!-- .entry-content --> 
</article>
<!-- #post-<?php the_ID(); ?> --> 
