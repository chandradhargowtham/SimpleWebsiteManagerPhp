<?php 
session_start();
if($_SESSION['loggedIn']!=true)
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Code Snippet</title>
</head>
<body>
<form action="" method="POST">
	<p> Paste code in the box below:<br>
	<textarea  cols="50" rows="10" name="textarea" >
	

       </textarea>
	<input type="submit" value="Generate Code Snippet">
</form>
</body>
</html>
<?php
if (isset($_POST['textarea'])) 
{
	$ohyeah=$_POST['textarea'];
	$newText= str_replace("<", "&lit",$ohyeah );
	$finalText= str_replace(">", "&git",$newText );
	$string="<b>Code Snippet</b><br>"."<textarea readonly>".$finalText."</textarea>";
	echo "Paste this code in you content area in the Admin Tools Page.";
	echo "<input type='text' value='$string''>";	
	echo "You can close this window after copying the text.";
}

?>