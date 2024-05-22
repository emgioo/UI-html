<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Welcome to my page!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("database.php");		
    $sql = "SELECT * FROM users";			
		$result = mysqli_query($conn, $sql);
	?>
				
		Welcome <?php echo $_SESSION['firstName'] ?> ! <a href='logout.php'>Logout</a><br/>
		<br/>
		<a href='usersList.php'>View Users List </a>
		<br/><br/>
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>
	
</body>
</html>
