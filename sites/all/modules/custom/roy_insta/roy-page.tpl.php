<script type="text/javascript">

function showHint(str) {
  var x = document.getElementById(str).src;
  document.getElementById("imgoverlay").src = x;
  //alert(str);
  	//var id = $(str).attr("id");
	//alert(id);
}

</script>

<!-- Large modal -->

<span id="txtHint"></span>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <img class="img-responsive" id="imgoverlay" />
       <!--<span id="imgurl"></span>-->
    </div>
  </div>
</div>

</br></br>
<?php foreach($insta as $item): ?>
  <div class="item1"> 
  	<?php print $item['caption']; ?> </br>
  	<img id="<?php echo $item['imgmain'];?>" data-toggle="modal" data-target=".bs-example-modal-lg" src="<?php print $item['imgpath']; ?>" onclick="showHint(this.id)" /> </br> </br>
  </div>
<?php endforeach; ?>

<?php
$a = ' ';
if (strpos($a,' ') !== false) {
    echo 'true';
}
?>