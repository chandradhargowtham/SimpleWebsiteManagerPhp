
<!DOCTYPE html>
<html>
<head>
	<title>Add Code Snippet</title>
</head>
<body>
<form action="" method="POST">
	<p> Paste code in the box below:<br>
	<textarea cols="50" rows="10" name="textarea" >
	

       </textarea>
	<input type="submit" value="Generate Code Snippet">
</form>
</body>
</html>
<?php
if (isset($_POST['textarea'])) 
{
	$string="<b>Code Snippet</b><br>"."<textarea>".$_POST['textarea']."</textarea>";
	echo "Paste this code in you content area in the Admin Tools Page.";
	echo "<input type='text' value='$string''>";	
	echo "You can close this window after copying the text.";
}

?>