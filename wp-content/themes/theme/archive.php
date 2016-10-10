<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

			<div class="container">
                <div class="row">

					<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
					?>

						<!-- POSTS -->
						<div class="col-sm-12 col-md-4 col-lg-3">
							<h1><?php the_title()?></h1>
							<?php the_content()?>
							<a href="<?php the_permalink()?>">Read more</a>
						</div>

					<?php
						// End the loop.
						endwhile;			
					?>

				</div>
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
