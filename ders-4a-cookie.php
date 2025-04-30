<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_COOKIES</h4>
</body>
</html>

<?php
 setcookie("Test" , "Aymes Bil Pro");
 
 $cerez=$_COOKIE['Test'];
 echo $cerez;
 echo "<br>";
 print_r($cerez);

?>