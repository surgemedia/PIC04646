<?php

	require('wp-blog-header.php'); 
	
	$arr = array('nonce'=>$_GET['secure_nonce'], 'verify'=>wp_verify_nonce($_GET['secure_nonce'], 'secure-frame-payment-nonce')); 
	
	
	if ( !$arr['verify'] ) {
		
		$arr['error'] = 'Error: Form submission was not valid.'; 
		
	} else {
		
		$arr['amount'] = round(floatval($_GET['amount']) * 100); 
		$arr['fp_timestamp'] = date('YmdHis'); 
		// Live Transaction: 1ks9g428    
		// Test Transaction: abc123
		$arr['fingerprint'] = $_GET['merchant_id'].'|1ks9g428|'.$_GET['txn_type'].'|'.$_GET['primary_ref'].'|'.$arr['amount'].'|'.$arr['fp_timestamp']; 
		$arr['fingerprint'] = sha1($arr['fingerprint']); 
		
		$arr['success'] = 'true'; 
		
	}
	
	echo json_encode($arr); 
