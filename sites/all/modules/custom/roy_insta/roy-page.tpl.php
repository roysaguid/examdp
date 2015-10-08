<?php

//$var1 = 'asdasd';
//if (isset($var1)){
//	echo $var1;
//}

?>

</br></br>
<?php foreach($insta as $item): ?>
  <div class="item"> 
  	<?php print $item['caption']; ?> </br>
  	<img src="<?php print $item['imgpath']; ?>" /> </br> </br>
  </div>
<?php endforeach; ?>

<?php


//$imgpath = 'http://storage2.static.itmages.com/i/15/1001/h_1443669059_1381872_6e8a236c63.jpeg';
// 	$form['test_image_markup'] = array(
//	'#markup' => '<img src="'.$imgpath.'"/>' 
//  );
	//echo $insta['imgpath'][0];
	//echo $insta['caption'][0];
	//echo "asdad";

	//$url = 'https://api.instagram.com/v1/tags/sexy/media/recent?client_id=c009ac352f59439ab860fb57958e54c9';
	//$insta_result = drupal_http_request($url);
	//$roy_json = drupal_json_decode($insta_result->data, true);
	//$i=0;
	
	//echo count($insta['imgpath']);

/*

	for ($i = 0; $i < count($insta['imgpath']); $i++) {
    	//echo "The number is: $x <br>";
    	$imgpath = $insta['imgpath'][$i];//$info['images']['standard_resolution']['url'];
	    $caption = $insta['caption'][$i];//$info['caption']['text'];
	    echo $caption."</br>";
	    echo "<img src='$imgpath' />"."</br></br></br>";
	} 
*/
	//$feeds = array();
	//foreach($insta as $feeds) {
		
	//	echo $feeds['imgpath'][0];
		//$imgpath = $feeds['imgpath'][1];//$info['images']['standard_resolution']['url'];
	    //$caption = $feeds['caption'][1];//$info['caption']['text'];
		//echo $feeds['imgpath'];
	//	echo $feeds['caption'];
	    //echo $caption."</br>";
	    //echo "<img src='$imgpath' />"."</br></br></br>";
	//	$i += 1;
	//}




/*
<?php foreach($data as $item): ?>
  <div class=“item”><img src=“<?php print $item[‘souce’]; ?>” /></div>
<?php endforeach; ?>
*/