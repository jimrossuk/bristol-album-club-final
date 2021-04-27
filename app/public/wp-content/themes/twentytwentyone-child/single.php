<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
	<h1> <?php the_field('artist')  ; ?></h1>
<?php

	$image = get_field('album_cover');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}

?>

	<h1> <?php the_field('album')  ; ?></h1>
	<h4> <?php the_field('album_name')  ; ?></h1>
	<h5> <?php the_field('who_picked_it')  ; ?></h1>
	<h6> <?php the_field('rating')  ; ?></h1>
	
	<?php
	$link = get_field('find_the_album_here');
if( $link ): ?>
    <a class=" centre" href="<?php echo esc_url( $link ); ?>">Rock Out Here</a>
<?php endif; ?>
<?php

