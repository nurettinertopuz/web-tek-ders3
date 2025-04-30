<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $degerler = array(
    "Türkiye",
    "Danimarka",
    "İngiltere",
    array(
       "Ankara",
       "Helsinki",
       "Londra",
    ),
    "Almanya",
    "İsveç",
    "Amerika",
    array(
       "Washington DC",
     array(
       "Seattle",
       "Vancouver",
       "Olympia",
    ),
 
 ),
 );

 echo "<pre>";
 print_r($degerler);
 echo "</pre>";
 
    
    ?>
</body>
</html>