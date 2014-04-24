<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage ColorLight
 * @since ColorLight 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php printf( __( 'Theme %s by %s', 'colorlight' ), '<a href="http://wordpress.org/themes/colorlight" target="_blank">ColorLight</a>', 'NodeCode' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>