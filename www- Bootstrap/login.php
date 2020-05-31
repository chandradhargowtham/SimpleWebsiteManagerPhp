<html>
<form action="login.php" method="POST">
	<input type="text" name="password">
	<input type="submit" value="Login">
</form>
</html>	

<?php 
$password = $_POST['password'];

if(isset($password))
{
	session_set_cookie_params(10);
	session_start();
	$_SESSION["login"]=true;
	echo "Session Stat";
}
?>