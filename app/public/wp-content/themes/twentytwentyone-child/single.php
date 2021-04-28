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
		<p class="ave score"> Average Score: </p>
		<p class="ave score"> <?php the_field('average_socre')  ; ?></p>
		<div class='ave'>

			<p> Club Average:</p>
			<p > <?php the_field('club_average')  ; ?></p> 
		</div>
		<p class='ave'> Club Max: </p>
		<p class='ave'><?php the_field('club_max')  ; ?></p>
		<p class='ave'> Club Minimum: <?php the_field('club_minimum')  ; ?></p>
		<p class='ave r'> Total Votes: <?php the_field('total_votes')  ; ?></p>
	</div>
	
</div>  
<!-- End of album-info -->
</div>
<div class="p-l">

	<h5> Introduced by: <?php the_field('who_picked_it')  ; ?></h5>
	<?php
	$link = get_field('find_the_album_here');
	if( $link ): ?>
    <a  href="<?php echo esc_url( $link ); ?>"><img  class="spotify-link" src="http://localhost:10003/wp-content/uploads/2021/04/icon1@2x.png" /> </a>
</div>
<?php endif; ?>
<?php



