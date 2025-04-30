<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_SESSION</h4>
</body>
</html>

<?php
$_SESSION["aymes"] = "Aydin Meslek Yüksekokulu";

echo "aymes session içindeki değer: " . $_SESSION["aymes"];


?>