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
            <div id="site-generator">
            	General Inquiries: OccupySandy@interoccupy.net &nbsp; | &nbsp; Press: SandyPress@interoccupy.net &nbsp; | &nbsp; Medics: SandyMedics@interoccupy.net &nbsp; | &nbsp; Volunteers: OccupySandyVolunteers@gmail.com
			</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>