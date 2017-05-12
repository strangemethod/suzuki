<?php get_header(); ?>

<div class="component bio" data-component="bio">
	<?php smk_get_template_part('template-parts/bio.php');?>
</div>

	<?php 

		require 'vendor/autoload.php';

		$sharedConfig = [
		    'region'  => 'us-west-1',
		    'version' => 'latest',
		    'credentials' => false    
		];

		$sdk = new Aws\Sdk($sharedConfig);
		$s3Client = $sdk->createS3();

		$result = $s3Client->listObjects([
			'Bucket' => 'aab-oss-test'
		]);
		$contents = $result['Contents'];
		
		echo '<h1>event1</h2>';

		foreach($contents as $value){
			$key = $value['Key'];
			$segments = explode("/", $key);
			$path = $segments[0];
			$file = $segments[1];
			if ($path === 'event1' && $file[0] !== '.' && $file !== ''){
				$plainUrl = $s3Client->getObjectUrl('aab-oss-test', $key);
				//echo $plainUrl;
				echo '<img src="'.$plainUrl.'" style="width: 300px; height: auto; margin: 20px;"/>';
			}
		}
		//echo '<pre>', htmlentities(print_r($result, true)), '</pre>' ;
	?>
	
<?php get_footer(); ?>
