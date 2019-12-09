<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package courtneydavis.me
 */

get_header();
?>
<header class="page-header">
	<div id="jumbotron" class="jumbotron jumbotron-fluid">
		<div class="container text-center">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'courtneydavis-me'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</div>
</header>

<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-sm-8" role="main">
			<?php if (have_posts()) : ?>


				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

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
