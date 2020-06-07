<?php
if(isset($_POST['submit']))
{
	$msg = 'http://www.learn.misplacedminds.com/AuthDB/newPassword.php';
	// send email
	mail($email,"Reset Password",$msg);
	echo "Please check your email for further instructions.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset password</title>
</head>
<body>
<form method="POST" class="loginbox" >
	<br>
	<h2>Reset Password</h2>
	<p>Enter Email: <input type="text" name="userId"></p>
		<input type="submit" name="submit" value="Reset Password">
</form>
</body>
</html>
<style type="text/css">
	.loginbox
	{
		border: 2px dotted black;
		display: inline-block;
		margin: 10px;
	}
	form
	{
		padding: 10px;
		margin-left: 10%;
		margin-right: 10%;
		width: 90%;
	}
	h2
	{
		background-color: black;
		padding: 20px;
		color: white;
	}
</style>