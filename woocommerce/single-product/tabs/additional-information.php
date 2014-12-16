<?php
/**
 * Additional Information tab
 * 
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly
	exit;
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional Information', 'woocommerce' ) );
?>

<?php if ( $heading ): ?>
	<h3><?php echo $heading; ?></h3>
<?php endif; ?>

<div class="row">
	<div class="six columns">
		<?php the_content(); ?>
	</div>
	<div class="six columns">
		<?php $product->list_attributes(); ?>
	</div>
</div>