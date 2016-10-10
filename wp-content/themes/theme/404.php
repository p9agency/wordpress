<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="content-area container">

	<div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
		<div class="col-sm-12">
			<h1><?php the_title()?></h1>
			<p>404 - Page not found</p>
		</div>
		<div class="col-sm-12">
			<?php get_search_form(); ?>
		</div>
		<?php
			// End of the loop.
		endwhile;
		?>
	</div>
</div><!-- .content-area -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
