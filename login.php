<?php
session_start();
 include 'dbConnect.php';
if (isset($_POST['email'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query=mysqli_query($conn,"SELECT * FROM customer WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_assoc($query)) {
        $_SESSION['fname'] = $row['fname'];
    }
	header('location:index.php');
}else{
	echo "invalid";
}
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST">
 	Email address: <input type="email" name="email"><br>
 	Password: <input type="password" name="password"><br>
 	<input type="submit" name="submit">
 	</form>
</body>
</html>