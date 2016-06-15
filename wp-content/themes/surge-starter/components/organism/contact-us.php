<?php 
		$image = (!is_default($vars['background']))?$vars['background']:get_field('default_background','option');

 ?>

<section id="contact-us" class="trans-overlay" style="background-image:url(<?php echo $image ?>)">
		<div class="container white-font text-center">
		<?php displayGravityForm(get_field("contact_us_form","option"),false,false,false,true,0); ?>
		</div>
</section>