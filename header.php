<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('•', true, 'right'); ?><?php bloginfo('name'); ?> • <?php bloginfo('description'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body <?php body_class(); ?>>
<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;	
if( $detect->isMobile() && !$detect->isTablet() ){
?>
<div class="mobileheader" role="banner">
	<div class="row">
		<ul class="two_up tiles">
			<li><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/header/logo.png" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" gumby-retina /></a></li>
			<li>
		<?php global $woocommerce; ?>
		<a class="cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="View your shopping cart">
			<i class="icon-basket"></i><br />
			<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?><br />
			<?php echo $woocommerce->cart->get_cart_total(); ?>
		</a>			
			</li>
		</ul>
		<div class="twelve columns">
			<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>
	</div>
</div>
<?php
} else {
?>
<div class="header" role="banner">
	<div class="row">
		<div class="three columns">
			<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/header/logo.png" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" gumby-retina /></a>
		</div>
		<div class="seven columns">
			<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>
		<div class="two columns">
			<?php global $woocommerce; ?>
			<a class="cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="View your shopping cart">
				<i class="icon-basket"></i><br />
				<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?><br />
				<?php echo $woocommerce->cart->get_cart_total(); ?>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<h2 class="tagline"><?php bloginfo('description'); ?></h2>
		</div>
	</div>
</div>
<?php } ?>
<div class="row">
	<div class="twelve columns">
		<div class="navbar" id="bbbnav" role="navigation">
			<div class="row">
				<a class="toggle" gumby-trigger="#bbbnav ul.menu" href="#"><i class="icon-menu"></i></a>
				<?php
				if( $detect->isMobile() && !$detect->isTablet() ){
				?>				
				<?php wp_nav_menu( array( 'theme_location' => 'bbbmobilemenu', 'container' => false, 'walker' => new Walker_Page_Custom ) ); ?>
				<?php
				} else {
				?>
				<?php wp_nav_menu( array( 'theme_location' => 'bbbmenu', 'container' => false, 'walker' => new Walker_Page_Custom ) ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="row" role="main">