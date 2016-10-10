<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
			<?php the_content()?>
		</div>
		<?php
			// End of the loop.
		endwhile;
		?>
	</div>
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
