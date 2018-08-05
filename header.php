<?php require_once('connect.php'); ?>
<?php session_start(); ?>
<?php 
	$query = "SELECT * FROM img where type='3' ";
	$result = mysqli_query($connection,$query);
	while($res = mysqli_fetch_assoc($result)){
		$color = $res['content'];
	}
	?>
<html>
<head>
	<title>Marjan Jewellery</title>
	<script src="jquery-1.11.3.min.js"></script>
	<script src="jquery.poptrox.min.js"></script>
<style>
#footer{
	background-color: <?php echo $color; ?> ;
	height: 3cm; margin-top: 6px;
	border:1px solid gray;
	border-radius: 10px;
	color:white;
}
#lg{
	padding-top: 4px;
}
body {font-family: sans-serif; font-size: 12pt; color: #444; line-height: 1.5em; } 
#h { font-size: 4em; } #gallery a { display: block; float: left;}
#gallery a img { display: block; border: 0; margin-left:4px;margin-top: 6px;}
</style>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript">
$(function() {
var foo = $('#gallery');
foo.poptrox({
usePopupCaption: true
});
});
</script>
</head>
<body>
<div class="container" id="cont">
<div class="col-md-10">
<h1 id="h">Marjan Jewellery</h1>
</div>
<div class="col-md-2">
<?php if(isset($_SESSION['username'])){ ?>
<a id="lg" class="btn-lg btn-success" href="logout.php">Logout</a>
<?php
}else{ ?>
	<a id="lg" class="btn-lg btn-success" href="login.php">Login</a> <?php
}

 ?>
</div>
</div>
</div>