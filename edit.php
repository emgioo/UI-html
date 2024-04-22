<?php 
    
	include ("database.php");
	if(isset($_POST["edit"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$age = $_POST["age"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$pnumber = $_POST["pnumber"];
		$id = $_POST["id"];

		$sql = "UPDATE users SET firstName = '$fname', lastName = '$lname', age = '$age', password = '$password', email = '$email', phone = '$pnumber' WHERE id = $id ";
        if(empty($fname) || empty($lname) || empty($age) || empty($password) || empty($email) || empty($pnumber) ){
            echo '<div class="alert alert-danger text-center" role="alert">
                    Required files !!
                </div>';
        }
       
		else if(mysqli_query($conn, $sql)){
            echo '<div class="alert alert-success text-center" role="alert">
                    Edit Successfully !!
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
      <?php 
		if(isset($_GET["id"])){
			$id = $_GET["id"];

			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);

			?>
				<form action="" method="post">
					<div class="d-flex justify-content-between align-items-center">
						<h1 class="text-center mb-3">Edit User</h1>
						<a href="usersList.php"  class="btn btn-success" >Users List</a>
					</div>
					
					<div class="row my-3">
						<div class="col">
							<input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $row["firstName"] ?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $row["lastName"] ?>">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<input type="text" class="form-control" placeholder="Age" name="age" value="<?php echo $row["age"] ?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $row["password"] ?>">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col">
							<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row["email"] ?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Phone Number" name="pnumber" value="<?php echo $row["phone"] ?>">
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
					<button type="submit" class="btn btn-primary" name="edit">EDIT</button>
					<a href="register.php"  class="btn bg-black text-white" >BACK</a>
				
				</form>
			<?php
		}

      ?>
        
    </div>
</body>
</html>
