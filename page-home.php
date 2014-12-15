<?php get_header(); ?>

	
	<div class="twelve columns">

		<div id="ch-carousel" class="owl-carousel">
			<?php
			// WP_Query arguments
			$args = array (
				'post_type' => 'carousel',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => '5',
			);
			// The Query
			$carousel = new WP_Query( $args );
			// The Loop
			if ( $carousel->have_posts() ) {
				while ( $carousel->have_posts() ) {
					$carousel->the_post();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'carousel' ); $url = $thumb['0'];
			?>
			<div class="item"><a href="<?php global $post; $text = get_post_meta( $post->ID, '_cmb_carousel', true ); echo $text; ?>"><img class="lazyOwl" data-src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></a>
				<div class="ic_caption">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
				</div>			
			</div>
			<?php
				}
			} else {
				// no posts found
			}
			
			// Restore original Post Data
			wp_reset_postdata();	
			?>
		</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php the_content(); ?>	
	
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>


<?php get_footer(); ?>