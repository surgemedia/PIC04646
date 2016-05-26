<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;


?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php 
if($_GET['secure_nonce']){
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
  }
 ?>
  <?php get_template_part('components/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('components/header');
    ?>
    <div class="wrap " role="document">
      <div class="">
        <main class="">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('components/footer');
      wp_footer();
    ?>
  </body>
</html>
