<html>
<body class = "bodyHeader">
<p>Featured Articles:</p>
<h2></h2></body>
</html>
<?php include "pageGenerator.php" ?>
<?php
$dir = "/codesnippets/";
$c=scandir("codesnippets/");

for($i=2;$i<4;$i++)
{
    $path= "codesnippets/$c[$i]";

    echo "<div class=container-fluid>";
      echo "<div class=row>";
       echo "<div class=col-md-4 col-xs-12>";
            echo"<div class=card flex-md-row mb-4 box-shadow h-md-250>";
               echo "<div class=card-body d-flex flex-column align-items-start>";
               echo" <strong class=d-inline-block mb-2 text-primary>".substr($c[$i], 0,strpos($c[$i], "-"))."</strong>";
               echo"<h3 class=mb-0><p class=text-dark>".substr($c[$i], 0,strlen($c[$i])-5)."</p></h3>";

              echo"<div class=codesnippetscontent>";
                echo"<p class=card-text mb-auto>"; 
                echo "</p>";
                $str=generatePage($c[$i],"codesnippets");
                
                echo '<a href="'.$str.'">'."Go to Article".'</a>';
                //echo '<a type=button class=btn btn-outline-dark href="' . $path . '">'."Read More".'</a>';   
              echo"</div>";
      echo"</div>";
  echo"</div>";
echo"</div>";
echo"</div>";
echo" </div>";
echo"</section>";

	if($i%3==0)
	{
		echo "<br>";
	}
}

?>
<!DOCTYPE html>


<!-- Inline CSS for easy editing-->
<style>

</style>
<script language="javascript">
</script>