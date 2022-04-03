<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

<!--		<h3>--><?php //esc_html_e( 'Billing &amp; Shipping', 'default' ); ?><!--</h3>-->
		<h3><?php esc_html_e( 'Данные покупателя', 'default' ); ?></h3>

	<?php else : ?>

<!--		<h3>--><?php //esc_html_e( 'Billing details', 'woocommerce' ); ?><!--</h3>-->
		<h3><?php esc_html_e( 'Данные покупателя', 'default' ); ?></h3>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
        <div class="checkout-inputs">
		<?php
		$fields = $checkout->get_checkout_fields( 'billing' );

//		foreach ( $fields as $key => $field ) {
//			woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
//		}
        woocommerce_form_field("billing_first_name",array(
            'type'          => 'text', // text, textarea, select, radio, checkbox, password
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Имя'
        ));
        woocommerce_form_field("billing_email",array(
            'type'          => 'email',
            'required'    => false,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'E-mail',
            'validate'      => array('email'),
        ));
        woocommerce_form_field("billing_phone",array(
            'type'          => 'tel',
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Телефон',
            'validate'      => array('phone'),
        ));
		?>
        <h3 class="address-checkout-heading">Адрес получателя</h3><?php
        woocommerce_form_field("billing_country",array(
            'type'          => 'text',
            'required'    => false,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Страна'
        ));
        woocommerce_form_field("billing_city",array(
            'type'          => 'text',
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Город'
        ));
        woocommerce_form_field("billing_address_1",array(
            'type'          => 'text',
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Улица'
        ));
        woocommerce_form_field("billing_address_2",array(
            'type'          => 'text',
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Дом'
        ));
        woocommerce_form_field("billing_address_3",array(
            'type'          => 'text',
            'required'    => true,
            'class'         => array('form-input checkout-form-input'),
            'placeholder'   => 'Квартира'
        ));
            ?>
            <h3>Комментарии</h3>
            <?php
            woocommerce_form_field("order_comments",array(
                'type'          => 'textarea',
                'required'    => false,
                'class'         => array('form-input checkout-form-textarea'),
                'placeholder'   => 'Введите текст'
            ));
        ?>
        </div>
	</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>