<?php session_start();
include 'dbConnect.php';

if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$add=$_POST['address'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$password=$_POST['password'];


$query=mysqli_query($conn,"SELECT * FROM customer WHERE email='$email'");

if (mysqli_num_rows($query)==0){
	mysqli_query($conn,"INSERT INTO customer (fname, lname, email, address, dob, tel, password) VALUES ('$fname', '$lname', '$email', '$add', '$dob', '$tel', '$password')");
	header('Location:login.php');
}
else{
	echo "Invalid emial address";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<form method="POST">
	First Name: <input type="text" name="fname"><br>
	Last Name: <input type="text" name="lname"><br>
	Date of Birth: <input type="Date" name="dob"><br>
	Address: <input type="text" name="address">
	Tel: <input type="Tel" name="tel">
 	Email: <input type="email" name="email"><br>
 	Password: <input type="password" name="password"><br>
 	<input type="submit" name="submit">
</form>
</body>
</html>