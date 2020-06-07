<?php include "header/header.php" ?>
<?php include "contact.html" ?>


<?php
$name = $_POST["name"];
$email = $_POST["email"];
$query = $_POST["query"];

$outputString = $name." \n".$email." \n".$query;
if(isset($name))
{

mail("chandradhargowtham93@gmail.com", "Learn MM Query", $outputString);
echo "Thanks for contacting us. Message sent.";
}
?>
<?php include "footer/footer.html" ?>