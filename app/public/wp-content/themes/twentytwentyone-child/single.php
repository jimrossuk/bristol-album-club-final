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
	<img class="album-pic-page album-size" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />			<?php endif; ?>
	

	
	<div class="album-data">
		<p class="date"> <?php the_field('date')  ; ?></p>
		<p class="ave score"> Average Score: </p>
		<h6 class="ave score"> <?php the_field('average_socre'); ?></h6>
		<div class='ave'>

		<p> Club Average:</p>
		<h5 > <?php the_field('club_average')  ; ?></h5> 
		</div>
		<p class='ave'> Club Max: </p>
		<h5 class='ave'><?php the_field('club_max')  ; ?></h5>
		<h6 class='ave'> Club Minimum: <?php the_field('club_minimum')  ; ?></h6>
		<p class='ave r'> Total Votes: <?php the_field('total_votes')  ; ?></p>
		<p class='ave '>Rank: <?php the_field('rating'); ?></p>
	</div>
	<div></div>
	
</div>  
<!-- End of album-info -->
</div>
	<div class="p-l">

	<h5 class='intro-link'>Introduced by: </h5>
	<h5 class='intro-link'><?php the_field('who_picked_it')  ; ?></h5>
	<?php
	$link = get_field('find_the_album_here');
	if( $link ): ?>
    <a  href="<?php echo esc_url( $link ); ?>"><img  class="spotify-link" src="http://localhost:10003/wp-content/uploads/2021/04/icon1@2x.png" /> </a>
</div>
<?php endif; ?>
<?php



