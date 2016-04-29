<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			get_component([ 
					'template' => 'atom/image-backing',
					'vars' => ['http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID01-Image-1.jpg'] ]);

 ?>

<div class="white-bg">
	<?php 
	get_component([ 
					'template' => 'organism/in-the-kitchen',
					]);

	 ?>
	 <section id="more-blog" class="container text-center">
	 		<h3>From Our Blog</h3>
	 		<div class="col-md-8 col-md-offset-2">
	 		<a href="">food for thought</a>
	 		<a href="">food for thought</a>
	 		<a href="">food for thought</a>
	 		<a href="">food for thought</a>
	 		<a href="">food for thought</a>
	 		<a href="" class="orange">More</a>
	 		</div>
	 </section>
	 </div>
	<?php 
			get_component([
				'template' => 'organism/contact-us',
				'vars' => [	
							'background' => 'http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID02-Image-2.jpg'

							]
						]);
	?>