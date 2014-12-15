</div>

<div class="row">
	<div class="twelve columns">
		<div class="navbar" id="nav2" role="navigation">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav2 ul.menu" href="#"><i class="icon-menu"></i></a>
				<?php wp_nav_menu( array( 'theme_location' => 'footermenu', 'container' => false, 'walker' => new Walker_Page_Custom ) ); ?>
			</div>
		</div>
	</div>
</div>

<footer class="row">
	<div class="twelve columns">
		&copy; <?php the_date('Y'); ?> Book Bag Bakers
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>