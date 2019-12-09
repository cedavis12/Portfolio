<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package courtneydavis.me
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title blog-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		<hr>
		<?php if ( 'post' === get_post_type() ) : ?>
			   <div class="post-details">
				<i class="fas fa-calendar-alt coral"></i><time> <?php the_date(); ?></time>
				<i class="fa fa-folder coral"></i> <?php the_category("| "); ?>
				<i class="fa fa-tags coral"></i> <?php the_tags("", "| ", "");?>
			
			
				<?php edit_post_link(' Edit', '<div><i class="fas fa-pencil-alt coral"></i>', '</div>'); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail() ) { ?>
		<div class="col-12">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>
	

	<div class="post-body">
		<?php the_content(); ?>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
