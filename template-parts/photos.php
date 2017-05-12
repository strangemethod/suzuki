<div class="content">

	<div class="grid masonry-grid">
		
		<div class="grid-sizer col-1-3"></div>

		<?php $imgs = rwmb_meta('rw_photo');
			foreach($imgs as $img){ ?>
				
				<div class="col-1-3 grid-item">
	        		<img src="<?php echo $img['full_url'];?>" alt="<?php echo $img['alt']; ?>"/>
	        	</div>
		<?php } ?>    

	</div>

</div>