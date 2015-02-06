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
			<div class="item"><a href="<?php global $post; $text = get_post_meta( $post->ID, '_cmb_carousel', true ); echo $text; ?>"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></a>
				<div class="ic_caption">
					<h3><?php the_title(); ?></h3>
					<?php
					require_once 'Mobile_Detect.php';
					$detect = new Mobile_Detect;	
					if( $detect->isMobile() && !$detect->isTablet() ){} else {
					?>
					<?php the_excerpt(); ?>
					<?php } ?>
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
	
	</div>


<?php get_footer(); ?>