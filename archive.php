<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package courtneydavis.me
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<div id="jumbotron" class="jumbotron jumbotron-fluid">
					<div class="container text-center">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
				</div>
			</header>

			<div class="container">
        		<div class="row" id="primary">    
            <main id="content" class="col-sm-8" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</main>

		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php

get_footer();
