<?php 
	$vars['col'] = $vars[0];
	$vars['title_class'] = $vars[1];
	$vars['title'] = $vars[2];
	$vars['content'] = $vars[3];
    $vars['component'] = $vars[4];

 ?>
<div class="<?php echo $vars['col'] ?>">
    <h1 class="<?php echo $vars['title_class']; ?>"><?php echo $vars['title']; ?></h1>
    <p><?php echo $vars['content']; ?></p>
    <?php echo $vars['component']; ?>
</div>