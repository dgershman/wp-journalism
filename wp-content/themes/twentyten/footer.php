<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 * customized by DannyG 2011-12-09
 */
?>
	</div><!-- #main -->
</div><!-- #wrapper -->

	<div id="footer" role="contentinfo">
		<div id="colophon">
			<span id="footercustomtext">
				<span class="footerlinks">&copy; 2013 Kissi Media</span>  |  <a class="footerlinks" href="<?php echo get_bloginfo('wpurl');?>/about">About</a> |  <a class="footerlinks" href="<?php echo get_bloginfo('wpurl');?>/contact">Contact</a>  |  <a class="footerlinks" href="<?php echo get_bloginfo('wpurl');?>/terms-of-use">Terms Of Use</a>  |  <a class="footerlinks" href="<?php echo get_bloginfo('wpurl');?>/privacy-policy">Privacy Policy</a>
			</span>
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	 
	/* get_sidebar( 'footer' ); */
?>
		</div><!-- #colophon -->
	</div><!-- #footer -->



<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
