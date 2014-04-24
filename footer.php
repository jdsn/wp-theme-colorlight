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
			<?php printf( __( 'Theme based on %s by %s', 'colorlight' ), '<a href="http://wordpress.org/themes/colorlight" target="_blank">ColorLight</a>', 'NodeCode' ); ?> | Powered by <a href="http://wordpress.org">Wordpress</a> | Hosted by <a href="http://schmidtcom.de">schmidtcom.de</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
