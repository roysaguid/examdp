<?php

//$imgpath = 'http://storage2.static.itmages.com/i/15/1001/h_1443669059_1381872_6e8a236c63.jpeg';
// 	$form['test_image_markup'] = array(
//	'#markup' => '<img src="'.$imgpath.'"/>' 
//  );

	$url = 'https://api.instagram.com/v1/tags/nofilter/media/recent?client_id=c009ac352f59439ab860fb57958e54c9';
	$insta_result = drupal_http_request($url);
	$roy_json = drupal_json_decode($insta_result->data, true);
	$i=0;
	 
	foreach($roy_json['data'] as $info) {
	
		$imgpath = $info['images']['standard_resolution']['url'];
	    $caption = $info['caption']['text'];

	    echo $caption."</br>";
	    echo "<img src='$imgpath' />"."</br></br></br>";
		$i += 1;
	}

