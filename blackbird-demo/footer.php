<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackbird-demo
 */

?>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blackbird-demo' ) ); ?>">
				<?php
				
				printf( esc_html__( 'Proudly powered by %s', 'blackbird-demo' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'blackbird-demo' ), 'blackbird-demo', '<a href="http://underscores.me/">Mathew</a>' );
				?>
		</div>
	</footer> -->

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
				<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
