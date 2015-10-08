<script>
function showHint(str) {
  var x = document.getElementById(str).src;
  document.getElementById("imgoverlay").src = x;
  //alert(str);
}
</script>

<!-- Large modal -->

<span id="txtHint"></span>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <img id="imgoverlay" width="100%" />
       <!--<span id="imgurl"></span>-->
    </div>
  </div>
</div>

</br></br>
<?php 
	//$imgmain = 'imgmain';
	$i=0;
?>
<?php foreach($insta as $item): ?>
  <div class="item"> 
  	<?php print $item['caption']; ?> </br>
  	<?php $imgmain='imgmain'.$i; 
  	//dpm($imgmain);?>
  	<img id="<?php echo $imgmain; ?>" data-toggle="modal" data-target=".bs-example-modal-lg" src="<?php print $item['imgpath']; ?>" onclick="showHint(this.id)" /> </br> </br>
  	<?php $i+=1; ?>
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