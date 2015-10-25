<?php
/**
 * Variable product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

global $woocommerce, $product, $post, $virtue_premium;
?>

<?php do_action('woocommerce_before_add_to_cart_form'); ?>


<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo $post->ID; ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">
	<?php if ( ! empty( $available_variations ) ) : ?>
	<table class="variations" cellspacing="0">
		<tbody>
			<?php $loop = 0; foreach ( $attributes as $name => $options ) : $loop++; ?>
				<tr>
					<?php if(isset($virtue_premium['product_radio']) && $virtue_premium['product_radio'] == 1) { ?>

						<td class="product_label"><label for="<?php echo sanitize_title($name); ?>"><?php echo wc_attribute_label( $name ); ?> <span class="kad_required" title="required">*</span></label></td>
						 <td class="value"><fieldset class="kad_radio_variations">
						 	
						 	<?php
							if ( is_array( $options ) ) {

								if ( isset( $_REQUEST[ 'attribute_' . sanitize_title( $name ) ] ) ) {
										$selected_value = $_REQUEST[ 'attribute_' . sanitize_title( $name ) ];
									} elseif ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) {
										$selected_value = $selected_attributes[ sanitize_title( $name ) ];
									} else {
										$selected_value = '';
									}

								// Get terms if this is a taxonomy - ordered
								if ( taxonomy_exists( $name ) ) {

									$terms = wc_get_product_terms( $post->ID, $name, array( 'fields' => 'all' ) );

										foreach ( $terms as $term ) {
											if ( ! in_array( $term->slug, $options ) ) {
												continue;
											}

										echo '<label for="'. esc_attr( sanitize_title($name) ) . esc_attr( $term->slug ) . '"><input type="radio" value="' . esc_attr( $term->slug ) . '" ' . checked( $selected_value, $term->slug, false ) . ' id="'. esc_attr( sanitize_title($name) ) . esc_attr( $term->slug ) . '" name="attribute_'. sanitize_title($name).'">' . apply_filters( 'woocommerce_variation_option_name', $term->name ) . '</label>';
									}
								} else {

									foreach ( $options as $option ) {
										echo '<label for="'. esc_attr( sanitize_title($name) ) . esc_attr( sanitize_title( $option ) ) .'"><input type="radio" value="' . esc_attr( sanitize_title( $option ) ) . '" ' . checked( sanitize_title( $selected_value ), sanitize_title( $option ), false ) . ' id="'. esc_attr( sanitize_title($name) ) . esc_attr( sanitize_title( $option ) ) .'" name="attribute_'. sanitize_title($name).'">' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</label>';
									}

								}
							}
						?>
						 </fieldset><?php if ( sizeof($attributes) == $loop )
                            echo '<a class="reset_variations" href="#reset" style="visibility: hidden;">'.__('Clear selection', 'woocommerce').'</a>';
                    ?></td>

					<?php } else {?>
					<td class="product_label"><label for="<?php echo sanitize_title($name); ?>"><?php echo wc_attribute_label( $name ); ?></label></td>
					<td class="product_value"><select id="<?php echo esc_attr( sanitize_title($name) ); ?>" name="attribute_<?php echo sanitize_title($name); ?>" data-attribute_name="attribute_<?php echo sanitize_title( $name ); ?>" class="kad-select">
						<option value=""><?php echo __( 'Choose an option', 'woocommerce' ) ?>&hellip;</option>
						<?php
							if ( is_array( $options ) ) {

								if ( isset( $_REQUEST[ 'attribute_' . sanitize_title( $name ) ] ) ) {
										$selected_value = $_REQUEST[ 'attribute_' . sanitize_title( $name ) ];
									} elseif ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) {
										$selected_value = $selected_attributes[ sanitize_title( $name ) ];
									} else {
										$selected_value = '';
									}

								// Get terms if this is a taxonomy - ordered
								if ( taxonomy_exists( $name ) ) {

									$terms = wc_get_product_terms( $post->ID, $name, array( 'fields' => 'all' ) );

										foreach ( $terms as $term ) {
											if ( ! in_array( $term->slug, $options ) ) {
												continue;
											}

										echo '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $selected_value ), sanitize_title( $term->slug ), false ) . '>' . apply_filters( 'woocommerce_variation_option_name', $term->name ) . '</option>';
									}
								} else {

									foreach ( $options as $option ) {
										echo '<option value="' . esc_attr( sanitize_title( $option ) ) . '" ' . selected( sanitize_title( $selected_value ), sanitize_title( $option ), false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>';
									}

								}
							}
						?>
					</select> <?php
						if ( sizeof($attributes) === $loop )
							echo '<div style="display:block"><a class="reset_variations" href="#reset">' . __( 'Clear selection', 'woocommerce' ) . '</a><div>';
					?></td>
					<?php } ?>
				</tr>
	        <?php endforeach;?>
		</tbody>
	</table>

	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<div class="single_variation_wrap_kad single_variation_wrap" style="display:block;">
		<?php do_action( 'woocommerce_before_single_variation' ); ?>
		<?php do_action( 'wgm_before_single_variation' ); ?>
		<div class="single_variation headerfont"></div>
		<?php do_action( 'wgm_after_single_variation' ); ?>
		<div class="variations_button">
			<?php woocommerce_quantity_input(); ?>
			<button type="submit" class="kad_add_to_cart single_add_to_cart_button headerfont kad-btn kad-btn-primary"><?php echo $product->single_add_to_cart_text(); ?></button>
		</div>

		<input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
			<input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
			<input type="hidden" name="variation_id" class="variation_id" value="" />

			<?php do_action( 'woocommerce_after_single_variation' ); ?>

	</div>

	<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	<?php else : ?>

		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>

	<?php endif; ?>

</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>
