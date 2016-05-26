<div class="gform_wrapper">
<div class="container white-font text-center">
<form id="secureframe_payonline_form" class="" method="post" action="https://payment.securepay.com.au/live/v2/invoice" data-nonce="6fe3be996b">
<div class="gform_body">
						<p id="amountNote" class="col-md-6 col-sm-12">
						<br>

							Please use numbers only. No $ sign required
						</p>
						
						<p class="col-md-6 col-sm-1">
						<br>
							3% Surcharge is applied to AMEX Cards
						</p>
						<input type="hidden" name="bill_name" value="transact">
						<input type="hidden" name="merchant_id" id="secureframe_merchant_id" value="DPZ0008">
						<input type="hidden" name="txn_type" id="secureframe_txn_type" value="0">
						<input type="hidden" name="amount" id="secureframe_sent_amnt" value="0">
						<input type="hidden" name="fp_timestamp" id="secureframe_tmstamp" value="">
						<input type="hidden" name="fingerprint" id="secureframe_fngrprint" value="">
						<input type="hidden" name="return_url" value="http://www.piccalilli.com.au/pay-online-complete/"> 
						<input type="hidden" name="return_url_text" value="Go back to Piccalilli main site"> 
						<input type="hidden" name="return_url_target" value="parent">
						<input type="hidden" name="surcharge" value="yes"> 
						<input type="hidden" name="surcharge_rate_a" value="3">
						<input type="hidden" name="card_types" value="VISA|MASTERCARD|AMEX">
						<input type="hidden" name="page_title" value="Piccalilli Invoice Payment">
						
					<ul class="gform_fields top_label form_sublabel_below description_below">
						<li class="gfield gfield_contains_required field_sublabel_below field_description_below">
							<div class="ginput_container ginput_container_text">
							<label class="gfield_label" for="input_1_2"><span class="gfield_required">*</span></label>
								<input name="primary_ref" id="secureframe_primary_ref" type="text" value="" class="medium" tabindex="1" placeholder="Invoice Number*">
							</div>
						</li>
						<li class="gfield gfield_contains_required field_sublabel_below field_description_below">
							<div class="ginput_container ginput_container_text">
							<label class="gfield_label" for="input_1_2"><span class="gfield_required">*</span></label>
								<input name="comp_name" id="comp_name" type="text" value="" class="medium" tabindex="1" placeholder="Company Name*">
							</div>
						</li>
						<li class="gfield gfield_contains_required field_sublabel_below field_description_below">
							<div class="ginput_container ginput_container_text">
							<label class="gfield_label" for="input_1_2"><span class="gfield_required">*</span></label>
								<input name="your_name" id="your_name" type="text" value="" class="medium" tabindex="1" placeholder="Your Name*">
							</div>
						</li>
						<li class="gfield gfield_contains_required field_sublabel_below field_description_below">
							<div class="ginput_container ginput_container_text">
							<label class="gfield_label" for="input_1_2"><span class="gfield_required">*</span></label>
								<input name="secureframe_amount" id="secureframe_amount" type="text" value="" class="medium" tabindex="1" placeholder="Amount to pay*">
							</div>
						</li>
					</ul>
						<!-- <div>
							<label for="secureframe_primary_ref">Invoice Number</label> 
							<input type="text" name="primary_ref" id="secureframe_primary_ref">
							<label for="comp_name">Company Name</label> 
							<input type="text" name="comp_name" id="comp_name">
							<label for="comp_name">Your Name</label> 
							<input type="text" name="your_name" id="your_name">
							<label for="secureframe_amount">Amount to pay</label> 
							<input type="text" name="secureframe_amount" id="secureframe_amount">
						</div> -->
						
						
						<div class="gform_footer top_label secure">
							
							<input class="submit gform_button button" type="submit" value="Submit" src="">
							
						</div>					
</div>
					</form>
</div>
</div>
<script >
	
// if this is set to true, process the form "secureframe_payonline_form"
var paymentValuesProcessed = false; 

// Process the values in the "secureframe_payonline_form" form first before 
//  sending them off to the Securepay Payment website 
var processPaymentValues = function () {
	
	// Run validation for the form values first before sending the form 
	
	// Test for empty text fields 
	fieldsEmpty = ( jQuery('#secureframe_primary_ref').val()=='' || jQuery('#secureframe_amount').val()=='' || jQuery('#comp_name').val()=='' || jQuery('#your_name').val()=='' ); 
	
	// Test for non-numeric Invoice amount here 
	jQuery('#secureframe_amount').val(jQuery('#secureframe_amount').val().replace(" ","")); 
	var amountNum = parseFloat(jQuery('#secureframe_amount').val()); 
	var amountNonNumeric = ( jQuery('#secureframe_amount').val()=='' || isNaN(amountNum) || jQuery('#secureframe_amount').val().match(/[^0-9\.]/g) ); 
	
	if ( fieldsEmpty ) {
	
		alert('Please make sure all text fields are filled in before submitting this form.'); 
		
	} else if ( amountNonNumeric ) {
		
		alert('The amount field only accepts numbers and decimal points.'); 
		
	} else {
		
		// Display loading ticker here 
		jQuery('#loading').show(); 
		
		jQuery.ajax({
			url 		: '/wp-admin/process_payment_form.php',  
			dataType 	: 'json',
			method 		: 'GET',  
			data 		: {
				'secure_nonce' 	: jQuery('#secureframe_payonline_form').attr('data-nonce'), 
				'amount'		: jQuery('#secureframe_amount').val(), 
				'merchant_id'	: jQuery('#secureframe_merchant_id').val(), 
				'txn_type'		: jQuery('#secureframe_txn_type').val(), 
				'primary_ref'	: jQuery('#secureframe_primary_ref').val() 
			}, 
			complete	: function () {
				
				// Hide loading ticker here 
				jQuery('#loading').hide(); 
					
			}, 
			success 	: function (data) {
				
				// Test for nonce errors here - display message if error 
				
				jQuery('#secureframe_sent_amnt').val(data.amount); 
				jQuery('#secureframe_tmstamp').val(data.fp_timestamp); 
				jQuery('#secureframe_fngrprint').val(data.fingerprint); 
				
				// Submit form here....
				paymentValuesProcessed = true; 
				jQuery('#secureframe_payonline_form').submit(); 
				
			}, 
			error		: function () {
				
				// Handle error here (display message) 
				
			}
		}); 
	
	}
	
}


jQuery(document).ready(function(){
	
	// When the Payment Form for SecureFrame is submitted, run this code 
	jQuery('#secureframe_payonline_form').submit(function(){
		
		if ( paymentValuesProcessed ) {
			return true;  
		} else {
			processPaymentValues(); 
		}
		
		return false; 
		
	}); 
	
}); 
</script>