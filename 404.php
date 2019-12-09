<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package courtneydavis.me
 */

get_header();
?>
<header class="page-header">
	<div id="jumbotron" class="jumbotron jumbotron-fluid">
		<div class="container text-center">
			<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'courtneydavis-me'); ?></h1>
		</div>
	</div>
</header><!-- .page-header -->

<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-sm-8" role="main">

			<section class="error-404 not-found">



				<div class="page-content">
					<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'courtneydavis-me'); ?></p>

				

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'courtneydavis-me'); ?></h2>
						<ul>
							<?php
							wp_list_categories(array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							));
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$courtneydavis_me_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'courtneydavis-me'), convert_smilies(':)')) . '</p>';
					the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$courtneydavis_me_archive_content");

					the_widget('WP_Widget_Tag_Cloud');
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->
</div>

<?php
get_footer();
