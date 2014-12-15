<?php get_header(); ?>

<div class="row">

	<div class="twelve columns" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div <?php post_class('row'); ?>>
		
		<div class="twelve columns">
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<h5><span datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished" class="updated dtstart"><?php the_time( 'D, jS M, Y' ); ?> / by <span class="vcard author"><span class="fn"><?php the_author('nicename'); ?></span></span></h5>
			
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="three columns">
			
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			
		</div>
		
		<div class="nine columns">
			
			<?php the_content(); ?>
			
		</div>
		
	</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>