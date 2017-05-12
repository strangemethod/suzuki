<div class="content">

	<h1>Gigs</h1>

	<?php 
		$gigs = rwmb_meta('rw_gig_links');
		foreach($gigs as $gig){
			echo '<a href="'.$gig[rw_gig_link_url].'" class="gig_link" target="blank">'.$gig['rw_gig_link_text'].'</a>';
		} 
	?>    

	<div class="grid">
						
		<div class="col-1-2 grid-item">

			<!-- tv -->
		  	<h2>TV Appearances</h2>
			<ul>
				<?php 
					$tvs = rwmb_meta('rw_tv');
					foreach($tvs as $tv){
						echo '<li>'.$tv.'</li>';
					} 
				?>      
			</ul>

		</div>

		<div class="col-4-10 grid-item">

			<!-- festivals -->
		  	<h2>Festival Highlights <span>Past, Current &amp; Future</span></h2>
		  	<ul>
				<?php 
					$festivals = rwmb_meta('rw_festivals');
					foreach($festivals as $fest){
						echo '<li>'.$fest.'</li>';
					} 
				?>  
			</ul>

		</div>

	</div>

</div>