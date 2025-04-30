<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>
<body>
Çok boyutlu diziler:
<br>

<?php
 $degerler = array(
   "Ocak",
   "Şubat",
   "Mart",
   array(
      "Pazartesi",
      "Salı",
      "Çarşamba",
      "Perşembe",
   ),
   "Nisan",
   "Mayıs",
   "Haziran",
   array(
      "Cuma",
    array(
      "sabah",
      "öğle",
      "akşam",
   ),
   "Cumartesi",
   "Pazar",

),
);

 echo "<pre>";
 print_r($degerler);
 echo "</pre>";

 echo "<pre>";
 print_r($degerler);
 echo "</pre>";
 
 echo "1. boyuttaki elemana erişim " . $degerler[0], "<br>";
 echo "2. boyuttaki elemana erişim " . $degerler[3][2], "<br>";


?>

</body>
</html>