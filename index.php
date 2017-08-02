<?php
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<a href="index.php?logout=1">Logout</a><br>
<p>Hello<?php if (isset($_SESSION['fname'])) {
	echo " ".$_SESSION['fname'];
}else{
	echo "<a href='login.php'>Login</a><br><a href='registration.php'>Click here to register</a>";
	} ?></p>

</body>
</html>