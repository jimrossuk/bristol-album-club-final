<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="content-container">
    <?php if ( is_home() ) : ?>
        <h1 class="page-title"><?php single_post_title(); ?></h1>

        <div class="container">
    <div class="row">
        <div class="blog-posts col-md-8">
        <?php if ( have_posts() ): ?>
            <?php while( have_posts() ): ?>
                <?php the_post(); ?>
              <div class="album">

                  <?php
                $image = get_field('album_cover');
                if( !empty( $image ) ): ?>
                <a  href="<?php the_permalink(); ?>" ?>
                    <h4> <?php the_field('artist')  ; ?></h4>
	                <h3> <?php the_field('album_name')  ; ?></h3>
                    <img class="album-index-page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <?php endif; ?>
                
            </div>
               
            <?php endwhile; ?>
        <?php else: ?>
            <p><?php _e( 'No Blog Posts found', 'nd_dosth' ); ?></p>
        <?php endif; ?>
        </div>
        <div id="blog-sidebar" class="col-md-4">
            
        </div>
    </div>
</div>

        
    <?php endif; ?>
</div>