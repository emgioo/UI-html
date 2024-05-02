<?php 
    session_start();
    include ("database.php");

	if(isset($_POST["create"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$age = $_POST["age"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$pnumber = $_POST["pnumber"];

		$sql = "INSERT INTO users (firstName, lastName, age, password, email, phone) VALUE ('$fname', '$lname', '$age', '$password', '$email', '$pnumber')";
        if(empty($fname) || empty($lname) || empty($age) || empty($password) || empty($email) || empty($pnumber) ){
            echo '<div class="alert alert-danger text-center" role="alert">
                    Required files !!
                </div>';
        }
       
		else if(mysqli_query($conn, $sql)){
            echo '<div class="alert alert-success text-center" role="alert">
                    Register Successfully !!
                </div>';
		}
		
	}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>  
    <div class="container mt-5">
        <form action="" method="post">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-center mb-3">Register Form:</h1>
                <a href="usersList.php"  class="btn btn-success" >Users List</a>
            </div>
            
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" name="fname">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Age" name="age">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone Number" name="pnumber">
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary" name="create">Create</button>
           
            
          
        </form>
    </div>
</body>
</html>
