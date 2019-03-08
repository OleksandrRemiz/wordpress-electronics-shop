<?php
// Template Name: Home
// phpinfo();
get_header();
?>

	<!-- <section id="primary" class="content-area"> -->
		<!-- <main id="main" class="site-main"> -->

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				// get_template_part( 'template-parts/content/content' );
				echo the_title();
				echo the_content();
			}

			// Previous/next page navigation.
			// twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			// get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		<!-- </main> -->
	<!-- </section> -->

<?php
get_footer();
?>