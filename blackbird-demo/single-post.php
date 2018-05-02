<?php
/**
 * Responsible for displaying individual aka single posts.
 * The template single-post.php will override single.php IF it exists, otherwise default will be single.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blackbird-demo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-post-template">

		<?php
		while ( have_posts() ) :

			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
