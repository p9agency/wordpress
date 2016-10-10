<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

    ?>
            <div class="container">
                <div class="row">
                	
                    <div class="col-sm-12 col-md-3 single-header-content">
                        <span class="catergory-heading"><?php get_the_category(); ?></span>
                        <h1><?= get_the_title();?></h1>
                        <?php the_date('jS F Y', '<span class="post-date">', '</span>',true); ?>
                    </div>

                    <div class="col-sm-12 col-md-9 blog-content">
                            <?= get_the_content() ?>
                    </div>
                </div>
            </div>



<?php endwhile; endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
