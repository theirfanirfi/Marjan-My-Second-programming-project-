<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Login</h1>
				<form action="login.php" method="post">
					Username: <input type="text" name="name" Placeholder="Username" value=""/><br/><br/>
					Password: <input type="Password" name="pass" Placeholder="Username" value=""/><br/><br/>
					<input type="submit" class="btn btn-primary" value="Login" name="login"/>

				</form>
			</div>
			<div class="col-md-4">
				<h1>Login</h1>
				<p>
					First Login to Do CRUD in the site.
				</p>
			</div>

		</div>
	</div>

</body>
</html>
<?php require_once('connect.php'); ?>
<?php 
session_start();
 ?>
<?php 
if(isset($_POST['login'])){
	if(!(empty($_POST['name'])) && (!(empty($_POST['pass'])))){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM admin WHERE username = '$name' AND password= '$pass' ";
	$result = mysqli_query($connection,$query);
	if($result){
		$_SESSION['username'] = '$name';
		header("Location:body_admin.php");
	}

}

}

?>
