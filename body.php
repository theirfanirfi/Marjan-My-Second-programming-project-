<?php require_once('connect.php'); ?>
<div class="container" id="cont">
		<div class="col-md-12">
			<h1 id="h">Special Offer</h1>
		</div>
	</div>
</div>
	<div class="container" id="bdy">
	
	<div id="gallery">
		<div class="container">
			<div class="row">
				
    	<?php 
    	$query = "SELECT * FROM img where type='0' ";
    	$result = mysqli_query($connection,$query); ?>
    		<div class="col-md-12">

    	<?php

    	while($res = mysqli_fetch_assoc($result)){
    		$img = $res['post_image'];
    		$content = $res['content'];?>

    		<a href="images/<?php echo $img; ?>"><img src="images/<?php echo $img; ?>" width="200" class="img-responsive"></a>
    		<p> <?php echo $content; ?></p>
    	
  
    	<?php }
    	?>
 </div>
   </div>
 </div>
 <div class="row">
				<div class="col-md-12">
					<h1 id="h">Newest Items</h1>
				</div>
				</div>

<!-- <div class="row">
				<div class="col-md-12">-->
					<?php 
    	$query = "SELECT * FROM img where type='1' ";
    	$result = mysqli_query($connection,$query); ?>
    	<?php

    	while($res = mysqli_fetch_assoc($result)){
    		$img = $res['post_image'];
    		$content = $res['content'];?>
    		<a href="images/<?php echo $img; ?>"><img src="images/<?php echo $img; ?>" width="250" title="<?php echo $content; ?>" class="img-responsive"></a>
    		
    	<?php }
    	?>
    
 </div>
 </div>

 </div>
 </div>
 </div>