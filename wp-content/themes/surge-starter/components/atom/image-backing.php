<?php 
	$vars['image'] = (!is_default($vars[0]))?$vars[0]:get_field('default_background','option');
 ?>
<div id="image-backing" style="background-image:url(<?php echo $vars['image']; ?>);">
</div>

