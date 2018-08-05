<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Make a New Admin</h1>
				<form action="register.php" method="post">
					Username: <input type="text" name="name" Placeholder="Username" value=""/><br/><br/>
					Password: <input type="Password" name="pass" Placeholder="Username" value=""/><br/><br/>
					<input type="submit" class="btn btn-primary" value="Register" name="register"/>

				</form>
			</div>
			<div class="col-md-4">
				<h1>Make an Admin</h1>
				<p>
					Here you can Make Admins who will be able to Edit 
					this Site,Upload/Delete Pictures.
				</p>
			</div>

		</div>
	</div>

</body>
</html>
<?php require_once('connect.php'); ?>
<?php 
session_start();

if(!(isset($_SESSION['username']))){
  header("Location:login.php");
} ?>
<?php 
if(isset($_POST['register'])){
	if(!(empty($_POST['name'])) && (!(empty($_POST['pass'])))){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$query = "INSERT INTO admin(username,password) Values('$name','$pass') ";
	$result = mysqli_query($connection,$query);
	if($result){
		$msg = "Admin Successfully Added";
	}

}
else{
	$msg = "Fields Can't be empty";
}
}

?>
<?php echo $msg; ?>