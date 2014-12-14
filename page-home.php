<?php get_header(); ?>

	
	<div class="twelve columns">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php the_content(); ?>

	<div class="row">
		
		<div class="twelve columns">
			<?php
				$args = array(  
				    'post_type' => 'product',  
				    'meta_key' => '_featured',  
				    'meta_value' => 'yes',
				    'posts_per_page' => '1' 
				);  
				$featured_query = new WP_Query( $args );  
				if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post();
				$product = get_product( $featured_query->post->ID );  
			?> 
			<h4 class="featured">Featured Products</h4>
			<?php endwhile; endif; wp_reset_query(); ?>
			<?php
				$args = array(  
				    'post_type' => 'product',  
				    'meta_key' => '_featured',  
				    'meta_value' => 'yes'  
				);  
				$featured_query = new WP_Query( $args );  
				$i = 1; echo '<div class="row">'; if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post();
				$product = get_product( $featured_query->post->ID ); 
			?>
				<div <?php post_class( 'three columns' ); ?> itemtype="http://schema.org/Product" itemscope>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
						<h5 class="entry-title" itemprop="name"><?php the_title(); ?></h5>
						<?php woocommerce_show_product_sale_flash(); ?>
					</a>
				</div>
			<?php if($i % 4 == 0) {echo '</div><div class="row">';} ?>
			<?php $i++; endwhile; ?>
			<?php else : ?>
			<?php endif; echo '</div>'; wp_reset_query(); ?>
		</div>
		
	</div>	
	
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>


<?php get_footer(); ?>