<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizlight
 */

?>


	<footer id="colophon" class="evision-wrapper site-footer" role="contentinfo">
		<div class="container footer-social-container">
			<di class="evision-social-section">
				<ul>
					<li><a href="https://www.facebook.com"></a></li>
					<li><a href="https://www.twitter.com"></a></li>
					<li><a href="https://www.linkedin.com"></a></li>
					<li><a href="https://www.instagram.com"></a></li>
					<li><a href="https://www.youtube.com"></a></li>
					<li><a href="https://plus.google.com"></a></li>
				</ul>
			</di>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bizlight' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bizlight' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bizlight' ), 'bizlight', '<a href="http://evisionthemes.com/" rel="designer">evisiontheme</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
