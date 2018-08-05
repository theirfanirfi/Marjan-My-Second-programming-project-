<?php require_once('connect.php'); ?>
<?php 
session_start();

if(!(isset($_SESSION['username']))){
  header("Location:login.php");
} ?>
<?php 
 if(isset($_POST['submit'])){
  $image_name = $_FILES['image']['name'];
  $image_type = $_FILES['image']['type'];
  $image_size = $_FILES['image']['size'];
  $image_tmp = $_FILES['image']['tmp_name'];
  $content = $_POST['content'];
  $type=2;
  if($image_type == "image/jpeg" || $image_type == "image/png" || $image_type == "image/gif"){
    if($image_size <= 200000){
      move_uploaded_file($image_tmp, "images/$image_name");
    }
    else{
      echo "<script>"."alert('Image Size should be less or equal to 200KB');"."</script>";
    }

  }else{
    echo "<script>"."alert('Image type is invalid');"."</script>";
  }
$query = "INSERT INTO img(post_image,content,type) values('$image_name','$content',$type) ";
$result = mysqli_query($connection,$query);
if($result){
  echo "<script>"."alert('Image is uploaded');"."</script>";
  header("Location:body_admin.php");
  
}
 }

 ?>
 <br / >
 <br />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-8">
 <form action="cupload.php" method="post" enctype="multipart/form-data">
  <br/><h2>Upload Section for Special Items</h2>
  <input class="btn btn-primary" type="file" placeholder="upload" name="image" /><br/>
  <h3>Description</h3>
  <textarea name="content" rows="10" col="20"></textarea><br/>
<br/>
  <input class="btn btn-success" type="submit" value="submit" name="submit"/>
 </form>
</div>
<div class="col-md-4">
  <h1>Upload</h1>
  <p>
    Here all the special items will be uploaded,you want to set some
     special price for it.
  </p>
</div>
</div>
</div>