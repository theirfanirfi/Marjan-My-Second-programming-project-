<?php require_once('connect.php'); ?>


<?php 
session_start();

if(!(isset($_SESSION['username']))){
  header("Location:login.php");
} ?>

<style type="text/css">
img {
	display: block;
	float:left;
}
p {
	display: block;
}
table {
	margin-top: 20px;
}
#ni,#dlt {
	text-decoration: none;
	background-color: black;
	color: white;
	padding: 8px;
	border: 1px solid red;
	border-radius: 4px;
	margin-bottom: 20px;
}
#ni:hover {
	text-decoration: none;
	background-color: white;
	color: black;
}
</style>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="container">
<div class="row">
<div class="col-md-12">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="logout.php">Logout<span class="sr-only">(current)</span></a></li>
        
      </ul>
</div>
</div>
</div>
<div class="container" id="cont">
		<div class="col-md-12">
			<h1 id="h">Top Picture</h1>
<a id ="ni" href="cupload.php">Upload Top Picture</a>
			
		</div>


<div class="row">
				<div class="col-md-12">
					<table border='1'>
						<th>Image</th>
						<th>content</th>
						<th>Action</th>
    <?php 
					$query = "SELECT * FROM img WHERE type = '2' ";
					$result = mysqli_query($connection,$query);
					while($res = mysqli_fetch_assoc($result)){
						$imag = $res['post_image'];
						$conte = $res['content']; 
						$id = $res['id']; ?>
						<tr>
						
						<td><img src="images/<?php echo $imag; ?>" width="200" /></td>
						
						<td><p text-align="left"><?php echo $conte; ?></p></td> 
						<td><?php 
						echo "<a id='dlt' href=\"delete.php?id=";
						echo urlencode($id); 
						echo "\">";
						echo "Delete it</a></td>";
						echo "</tr>";
						
					}

					?>
				</table>
 </div>
 </div>
 </div>

<div class="row">
	<div class="col-md-12">
			<h1 id="h">Special Offer</h1>
<a id ="ni" href="sf.php">Upload Special Offer Items</a>
			
		</div>
				<div class="col-md-12">
					<table border='1'>
						<th>Image</th>
						<th>content</th>
						<th>Action</th>
    <?php 
					$queryy = "SELECT * FROM img WHERE type = '0' ";
					$result = mysqli_query($connection,$queryy);
					while($ress = mysqli_fetch_assoc($result)){
						$imgg = $ress['post_image'];
						$contt = $ress['content']; 
						$id = $ress['id']; ?>
						<tr>
						
						<td><img src="images/<?php echo $imgg; ?>" width="200" /></td>
						
						<td><p text-align="left"><?php echo $contt; ?></p></td> 
						<td><?php 
						echo "<a id='dlt' href=\"delete.php?id=";
						echo urlencode($id); 
						echo "\">";
						echo "Delete it</a></td>";
						echo "</tr>";
						
					}

					?>
				</table>
 </div>
 </div>
 </div>

	<div class="container" id="bdy">
	
	<div id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
   
 </div>
 </div>
 <div class="row">
				<div class="col-md-12">
					<h1 id="h">Newest Items</h1><br/><br />
					<a id ="ni" href="newest.php">Upload Newest Items</a>


				</div>
				</div>

 <div class="row">
				<div class="col-md-12">
					<table border='1'>
						<th>Image</th>
						<th>content</th>
						<th>Action</th>
    <?php 
					$query = "SELECT * FROM img WHERE type = '1' ";
					$result = mysqli_query($connection,$query);
					while($res = mysqli_fetch_assoc($result)){
						$img = $res['post_image'];
						$cont = $res['content']; 
						$id = $res['id']; ?>
						<tr>
						
						<td><img src="images/<?php echo $img; ?>" width="200" /></td>
						
						<td><p text-align="left"><?php echo $cont; ?></p></td> 
						<td><?php 
						echo "<a id='dlt' href=\"delete.php?id=";
						echo urlencode($id); 
						echo "\">";
						echo "Delete it</a></td>";
						echo "</tr>";
						
					}

					?>
				</table>
 </div>
 </div>

 </div>
 </div>

 <h1>Change Footer color</h1>
 <?php 
 if(isset($_POST['change'])){
$color = $_POST['color'];
$type =3;
$query = "UPDATE img SET content = '$color' WHERE type='3' ";
$result = mysqli_query($connection,$query);
 }
 ?>
 <form action="body_admin.php" method="post">
 	Footer Color: <input type="text" name="color" placeholder="Enter color name e.g., black" /><br/>
 	<input type="submit" class="btn btn-primary" value="change" name="change"/>
 </form>
 </div>
