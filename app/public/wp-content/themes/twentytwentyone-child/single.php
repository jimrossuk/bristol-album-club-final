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
	<h5 class="artist"> <?php the_field('artist')  ; ?></h5>
	<h4 class="artist"> <?php the_field('album_name')  ; ?></h4>
	<div class="">

<div class=" album-info">
			
	<?php
	$image = get_field('album_cover');
    if( !empty( $image ) ): ?>
	<img class="album-pic-page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />			<?php endif; ?>
	
	<div class="album-data">
		<p class="date"> <?php the_field('date')  ; ?></p>
		<p class="ave-score"> Average Score: <?php the_field('average_socre')  ; ?></p>
		<p> Club Average: <?php the_field('club_average')  ; ?></p> 
		 <p> Club Max: <?php the_field('club_max')  ; ?></p>
		<p> Club Minimum: <?php the_field('club_minimum')  ; ?></p>
		<p> Total Votes: <?php the_field('total_votes')  ; ?></p>
	</div>
	
</div>  
<!-- End of album-info -->
</div>
<div class="p-l">

	<h5> Introduced by: <?php the_field('who_picked_it')  ; ?></h5>
	<?php
	$link = get_field('find_the_album_here');
	if( $link ): ?>
    <a class=" centre" href="<?php echo esc_url( $link ); ?>">Rock Out Here</a>
</div>
<?php endif; ?>
<?php

