<?php require_once('connect.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php 
      $query ="SELECT * FROM img where type='2' ";
      $result = mysqli_query($connection,$query);
      while($res = mysqli_fetch_assoc($result)){
        $img = $res['post_image'];
        $content = $res['content'];

      }

      ?>
      <img src="images/<?php echo $img; ?>" alt="...">
      <div class="carousel-caption">
        <h1><?php echo $content; ?></h2>
      </div>
    </div>
    
      
      
    </div>
    ...
  </div>

  <!-- Controls -->
  
</div>

  </div>
</div>