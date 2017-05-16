<?php 

	/* 
	 * S3 Gallery
	 * Build photo gallery from AWS S3 Bucket
	 * Folder name is authored as page level and passed into component
	 */

	require get_template_directory().'/vendor/autoload.php';

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