<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dersleri</title>
</head>
<body>
  <h3>sık kullanılan hazır fonksiyonlar</h3>  

  <?php 
   echo $metin = " aydın adnan menderes universitesi ";
   $byazi = strtoupper($metin); // yazıyı büyük harfe dönüştür
   $kyazi = strtolower($byazi); // yazıyı küçük harfe dönüştür
   $mb_byazi = mb_strtoupper($kyazi); // yazıyı büyük harfe dönüştür
   $mb_kyazi = mb_strtolower($mb_byazi); // yazıyı küçük harfe dönüştür
   $ilkharf_buyuk_metin = ucfirst($mb_kyazi); // gelen metnin ilk harifni büyütür
   $ilkharf_büyük_kelime = ucwords($mb_kyazi); // gelen metnin kelimelerinin baş harflerini büyütür
   
    "<br> karakter sayısı: " . strlen($metin);
    "<br> metnin belirli bir karakter sayısı: " . substr($metin,0,25);
   
  ?>

  <h4>Uygulama</h4>
  <p> Lorem metninin ilk 100 karakterini alın
     devamında bir buton yerleştirerek Adü web sitesine yönlendirin </p>

<?php
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Accusantium eum quasi ipsam corrupti fugit, maxime consectetur doloremque!
 Est illo hic unde quibusdam rerum aperiam, sunt aspernatur odio, ab a atque.";

 echo substr($lorem,0,96). "...";
 echo '<br><a href="https://www.adu.edu.tr/" target ="_blank"> Devamını oku </a>'

?>




</body>
</html>