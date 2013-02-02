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
    
    <?php
	/* Get all sticky posts */
	$sticky = get_option( 'sticky_posts' );

	/* Sort the stickies with the newest ones at the top */
	rsort( $sticky );

	/* Get the 5 newest stickies (change 5 for a different number) */
	$sticky = array_slice( $sticky, 0, 5 );

	/* Query sticky posts */
	query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
	?>

    
	<div class="feature" id="feature">
		<h2 class="feature-title">Newswire:</h2>
		<nav>
			<button class="feature-next">▸</button>
			<button class="feature-back">◂</button>
		</nav>
		<div style="clear: both"></div>
		<div class="feature_container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="feature-slide">
				<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" rel="bookmark"> -->
					<h3 class="feature-headline"><?php the_excerpt(); ?></h3>
				<!-- </a> -->
			</div>
	    <?php endwhile; // end of the loop. ?>
		</div>
    </div>
    <!-- .featured-posts -->

     <?php wp_reset_query(); ?> 


  <?php the_content(); ?>
  </div>
  <!-- .entry-content --> 
</article>
<!-- #post-<?php the_ID(); ?> --> 
