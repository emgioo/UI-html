<?php 
    session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <?php 
    include "database.php";
    if(isset($_POST["login"])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      
      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      if(is_array($row) && !empty($row)) {
        $validuser = $row['email'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['id'] = $row['id'];
      } else {
        echo "Invalid username or password.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
      }
  
      if(isset($_SESSION['valid'])) {
        header('Location: home.php');			
      }
      /*if($row>0){
        $data = mysqli_fetch_array($result);
        $Uemail = $data["email"];
        $_SESSION["email"] = $Uemail;
        header("Location: usersList.php");
        exit();
      }else{
        echo '<div class="alert alert-danger" role="alert">
                Error password or email !!
            </div>';
      }
      */
    }
  ?>
    <h1 class="mb-3 mt-5">Login Form:</h1>
    <form action="login.php" method="post">
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Submit</button>
    </form>
  </div>
  
</body>
</html>