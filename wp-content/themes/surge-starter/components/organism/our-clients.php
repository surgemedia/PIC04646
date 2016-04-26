<section id="clients" class="white-bg">
<div class="container">
<?php 
	get_component([
		'template' => 'molecule/page-section-title',
		'remove_tags' => ['p'],
		'vars' => [
					'page-section-title container text-center',
					'Our Clients',
					NULL
					]
				]);
 ?>
<div class="clients owl-carousel">
   <?php 
	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item activetext-center',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/QLD-POLICE-logo.png',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
		get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
 	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
   ?>
  </div>
  
  </div>
  <div class="fake-nav">
  <div class="owl-nav">
            <div class="client-owl-prev">prev</div>
            <div class="client-owl-next">next</div>
        </div>
   </div>
</section>