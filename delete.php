<?php 
  include("database.php");
  if(isset($_GET["id"])){
	$id = $_GET["id"];

	$sql = "DELETE FROM users WHERE id = $id";

	if(mysqli_query($conn, $sql)){
		session_start();
		$_SESSION["delete"] = "Delete User Seccessfully !!";
		header("location:usersList.php");
	}
  }

?>