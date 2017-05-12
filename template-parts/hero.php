
<!-- main_img -->
<?php $count = 0; 
	$imgs = rwmb_meta('rw_main_img');
	foreach($imgs as $img){ 
		if ($count < 1): ?>

		<div class="component hero" 
			style="background-image: url(<?php echo $img['full_url']; ?>)">
		</div>

	<?php endif; $count++; ?>
<?php } ?>    

