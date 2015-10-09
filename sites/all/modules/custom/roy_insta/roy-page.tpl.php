<script>
function showHint(str) {
  var x = document.getElementById(str).src;
  document.getElementById("imgoverlay").src = x;
  //alert(str);

	//alert($(str).attr("id"));
}

</script>

<!-- Large modal -->

<span id="txtHint"></span>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <img id="imgoverlay" width="100%" />
       <!--<span id="imgurl"></span>-->
    </div>
  </div>
</div>

</br></br>
<?php foreach($insta as $item): ?>
  <div class="item"> 
  	<?php print $item['caption']; ?> </br>
  	<img id="<?php echo $item['imgmain'];?>" data-toggle="modal" data-target=".bs-example-modal-lg" src="<?php print $item['imgpath']; ?>" onclick="showHint(this.id)" /> </br> </br>
  </div>
<?php endforeach; ?>