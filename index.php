<?php get_header(); ?>


	<div class="twelve columns" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class('blogPost'); ?>>
		<div class="row" itemscope itemtype="http://schema.org/BlogPosting">
			
			<div class="twelve columns">
				
				<h3 itemprop="name headline" class="entry-title p-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<h5><span datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished" class="updated dtstart"><?php the_time( 'D, jS M, Y' ); ?> / by <span class="vcard author"><span class="fn"><?php the_author('nicename'); ?></span></span> <small>(<?php comments_number( 'no comments', '1 comment', '% comments' ); ?>)</small></h5>
			</div>			
		</div>
		
		<div class="row">
			
			<div class="three columns">
				
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('article'); ?></a>
				
			</div>
			
			<div class="nine columns p-summary" itemprop="articleBody">
				
				<?php the_excerpt(); ?>
				
				<div class="woocommerce"><a href="<?php the_permalink(); ?>" class="button wc-forward">Read...</a></div>
				
			</div>
			
		</div>
	</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

	</div>


<?php get_footer(); ?>