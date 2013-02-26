<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Foghorn
 * @since Foghorn 0.1
 */
?>

	</div><!-- #main -->

	<footer id="interoccupy">
			<div class="about">
			<!-- Footer-widget-left -->
			<?php dynamic_sidebar( 'Footer-left' ) ?>
			</div>
			<!--
			<div class="events">
				<h3 class="events-title">Next meeting:</h3>
				<p>None scheduled. Check back soon for the next call.</p>
			</div>
			-->
			<div class="weather">
			<!-- Footer-widget-middle -->
				<?php dynamic_sidebar( 'Footer-middle' ) ?>
			</div>		
			<div class="contact">
			<!-- Footer-widget-right -->
				<?php dynamic_sidebar( 'Footer-right' ) ?>
			</div>
	</footer>

	<footer id="colophon" role="contentinfo">

			<nav id="global">
				<ul id="menu-global-menu">
					<li class="globalLogo">Brought to you by: <a href="http://interoccupy.net">Inter<span>occupy.net</span></a></li>
					
					<li>
						<?php if ( $footer = of_get_option('footer_text', 0) ) {
					echo $footer;
				} else {
					_e( 'Powered by ', 'foghorn' ); ?><a href="<?php echo esc_url( __( 'http://www.wordpress.org', 'foghorn' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'foghorn' ); ?>" rel="generator"><?php _e( 'WordPress', 'foghorn' ); ?></a>
                <?php _e( 'and ', 'foghorn' ); ?><a href="<?php echo esc_url( 'http://wptheming.com/foghorn/' ); ?>" title="<?php esc_attr_e( 'Download the Foghorn Theme', 'foghorn' ); ?>" rel="generator"><?php _e( 'Foghorn', 'foghorn' ); ?></a>
                <?php _e( 'view Source on ', 'foghorn' ); ?><a href="<?php echo esc_url( 'https://github.com/occupynet/sandy/' ); ?>" title="<?php esc_attr_e( 'View the OccupySandy Theme source files on GitHub', 'foghorn' ); ?>" rel="generator"><?php _e( 'GitHub', 'foghorn' ); ?></a>
                <?php } ?>
					</li>
				</ul>
			</nav>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>