
<?php include "header/header.html" ?>

<html>
<body>
  <form method="POST" action="admintools.php">

  </form>
  


 <div>
  <h2>Your content!</h2>
   <form action="admintools.php" method="POST">
     <div>
      Enter Page Passphrase: <input type="password" placeholder="Passphrase" name="passphrase">
      <br><br>
       Enter Page Title: <input type="text" placeholder="Page Title" name="title">

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
  <p><br><br><a href="addCodeSnippet.php" target="_blank">Click here </a>to add a code snippet.</p>
  <p><br><br><a href="image.php" target="_blank">Click here </a>to upload and add an image.</p>

 </div>
</body>
</html>

<?php 

if(isset($_POST["title"]))
{

  extract($_REQUEST);
    $type=$_POST["type"];
    $title=$_POST["title"];
    $password=$_POST["passphrase"];
    $ArticleCategory = $_POST["ArticleCategory"];
    $articleContent=$_POST["content"];

    $headingPartStart = "<h1>";
    $headingPartEnd = "</h1>";
       
    $bodyPartStart= "<p>";
    $bodyPartEnd= "</p>";


  if($password=="P0rap@ndi")
  {
  if($type=="codesnippets")
  {
  
    $articleName= $ArticleCategory." - ".$title;
    $content=fopen("$type/$articleName.html","w");

    
    $headingVar= $headingPartStart.$title.$headingPartEnd;
    $bodyVar = $bodyPartStart.$articleContent.$bodyPartEnd;
    $cssVar =   '<link href="articlesStyle.css" type = "text/css" rel="stylesheet">';

    fwrite($content, "<html>");
    fwrite($content,  $cssVar );
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
    $cssVar =   '<link href="articlesStyle.css" type = "text/css" rel="stylesheet">';

    fwrite($content, "<html>");
    fwrite($content,  $cssVar );
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
    
      $cssVar =   '<link href="articlesStyle.css" type = "text/css" rel="stylesheet">';

      
       
        
        if(strpos($articleContent, "\n"))
        {
          $newBody=str_replace("\n","<br>",$articleContent);    
        }
        
        
        
      
      $bodyVar = $bodyPartStart.$newBody.$bodyPartEnd;
      

    fwrite($content, "<html>");
    fwrite($content,  $cssVar );
    fwrite($content, $headingVar);
    fwrite($content, $bodyVar);
    fwrite($content, "</html>");
    fclose($content);
  }
  echo "Successfully created $type item";
}
else
{
  echo "Wrong Passphrase";
}

}


?>

<?php include "footer/footer.html" ?>