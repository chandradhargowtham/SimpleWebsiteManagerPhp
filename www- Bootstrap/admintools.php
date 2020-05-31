
<?php include "header/header.html" ?>

<html>
<body>
  <form method="POST" action="admintools.php">

  </form>
  


 <div>
  <h2>Your content!</h2>
   <form action="">
     <div>
       <input type="text" placeholder="title" name="title">
     </div>
     <div>
         <select name="type">
             <option value="articles">Articles</option>
             <option value="tutorials">Tutorials</option>
             <option value="codesnippets">CodeSnippets</option>
         </select>
         <select name="ArticleCategory">
    <option>Unity</option>
    <option>PHP</option>
  </select><br>
     </div>
     <div>
       <textarea cols="50" rows="10" name="content">

       </textarea>
     </div>
     <input type="submit" value="Publish">
  </form>
 </div>
</body>
</html>

<?php 
if($_SESSION["login"]==true)
if(isset($_GET["title"]))
{
  extract($_REQUEST);
    $type=$_GET["type"];
    $title=$_GET["title"];
    $ArticleCategory = $_GET["ArticleCategory"];
    $articleContent=$_GET["content"];

    $headingPartStart = "<h1>";
    $headingPartEnd = "</h1>";
       
    $bodyPartStart= "<p>";
    $bodyPartEnd= "</p>";


  if($type=="codesnippets")
  {
  
    $articleName= $ArticleCategory." - ".$title;
    $content=fopen("$type/$articleName.html","w");

    
    $headingVar= $headingPartStart.$title.$headingPartEnd;
    $bodyVar = $bodyPartStart.$articleContent.$bodyPartEnd;


    fwrite($content, "<html>");
    fwrite($content, $headingVar);
    fwrite($content, $bodyVar);
    fwrite($content, "</html>");
    fclose($content);
  } elseif ($type=="tutorials")
  {
  $articleName= $ArticleCategory." - ".$title;
    $content=fopen("$type/$articleName.html","w");

    
    $headingVar= $headingPartStart.$title.$headingPartEnd;
    $bodyVar = $bodyPartStart.$articleContent.$bodyPartEnd;


    fwrite($content, "<html>");
    fwrite($content, $headingVar);
    fwrite($content, $bodyVar);
    fwrite($content, "</html>");
    fclose($content);
    
  } 
  elseif($type=="articles")
  {
    $articleName= $ArticleCategory." - ".$title;
    $content=fopen("$type/$articleName.html","w");

    
    $headingVar= $headingPartStart.$title.$headingPartEnd;
    $bodyVar = $bodyPartStart.$articleContent.$bodyPartEnd;


    fwrite($content, "<html>");
    fwrite($content, $headingVar);
    fwrite($content, $bodyVar);
    fwrite($content, "</html>");
    fclose($content);
  }
}

?>

<?php include "footer/footer.html" ?>