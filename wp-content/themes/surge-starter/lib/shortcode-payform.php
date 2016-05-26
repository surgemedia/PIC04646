<?php 
	// Add Shortcode
	function payment_form_display() {
		get_component([
					'template' => 'molecule/securepay',
					'return_string' => true,
					'vars' => []
							]);
	}
	add_shortcode( 'payment-form', 'payment_form_display' );

 ?>