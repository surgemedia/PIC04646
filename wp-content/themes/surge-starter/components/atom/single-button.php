<?php 
	$vars['col'] = $vars[0];
	$vars['class'] = $vars[1];
	$vars['line_1'] = $vars[2];
	$vars['href'] = $vars[3];
 ?>
<a class="<?php echo $vars['col'] ?> <?php echo $vars['class'] ?>" href="<?php echo $vars['href']; ?>">
    <span>
        <?php echo $vars['line_1']; ?>
    </span>
</a>