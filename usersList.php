<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-between align-items-center my-5">
			<h1>Users List</h1>
			<div>
				<a href="register.php" class="btn btn-primary">Register</a>
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">AGE</th>
					<th scope="col">PASSWORD</th>
					<th scope="col">EMAIL</th>
					<th scope="col">PHONER NUMBER</th>
					<th scope="col">OPERATION</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include ("database.php");
					$sql = "SELECT * FROM users";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_array($result)){
						?>
							<tr>
								<td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["firstName"]; ?></td>
								<td><?php echo $row["lastName"]; ?></td>
								<td><?php echo $row["age"]; ?></td>
								<td><?php echo $row["password"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["phone"]; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row ["id"]; ?>" class="btn btn-success">EDIT</a>
									<a href="delete.php?id=<?php echo $row ["id"]; ?>" class="btn btn-danger">DELETE</a>
								</td>
							</tr>
						<?php
					}
					
				?>
			</tbody>
		</table>
	</div>
</body>
</html>