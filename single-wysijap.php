<?php get_header(); ?>

<div class="row">

	<div class="twelve columns" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div <?php post_class('row'); ?>>
		
		<div class="twelve columns">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
		
	</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>