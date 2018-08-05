<?php require_once('connect.php'); ?>
<?php 
session_start();

if(!(isset($_SESSION['username']))){
  header("Location:login.php");
} ?>
<?php 
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "DELETE FROM img where id = '$id' ";
	$result = mysqli_query($connection,$query);
	if($result){
		header('Location:body_admin.php');
	}
}


?>