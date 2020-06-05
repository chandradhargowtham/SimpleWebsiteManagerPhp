<?php
session_start();
$userName=$_POST['userId'];
$password=$_POST['pwd'];
if (isset($_POST['submit'])) 
{
	
		if($userName=="chan" && $password=="pwd")
		{
			$_SESSION['loggedIn']=true;
			header("Location: admintools.php");
			echo "Login Successful.";
		}else
		{
			echo "failed";
			session_destroy();
		}
}
?>
<?php include "header/header.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST">
	<p>Enter Username: <input type="text" name="userId"></p>
	<p>Enter Password :  <input type="password" name="pwd"></p>
	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>
<?php include "footer/footer.html" ?>