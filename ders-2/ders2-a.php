<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders 2</title>
</head>
<body>
    <h5>toplama</h5>
    <?php 
      $sayi1 = 20;
      $sayi2 = 12;
      $sonuc = $sayi1 + $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 + $sayi2 = $sonuc";
    
    echo "<br><br> atamalı toplama işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger + $ekdeger : " . $deger +=$ekdeger;    
    echo  "<br> $deger";
    ?>

<h5>toplama</h5>
    <?php 
      $sayi1 = 20;
      $sayi2 = 12;
      $sonuc = $sayi1 + $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 + $sayi2 = $sonuc";
    
    echo "<br><br> atamalı toplama işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger + $ekdeger : " . $deger +=$ekdeger;    
    echo  "<br> $deger";
    ?>
    
    <h5>çıkarma</h5>
    <?php 
      $sayi1 = 20;
      $sayi2 = 12;
      $sonuc = $sayi1 - $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 - $sayi2 = $sonuc";
    
    echo "<br><br> atamalı çıkarma işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger - $ekdeger : " . $deger -=$ekdeger;    
    echo  "<br> $deger";
    ?>

<h5>çarpma</h5>
    <?php 
      $sayi1 = 20;
      $sayi2 = 12;
      $sonuc = $sayi1 * $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 * $sayi2 = $sonuc";
    
    echo "<br><br> atamalı çarpma işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger * $ekdeger : " . $deger *=$ekdeger;    
    echo  "<br> $deger";
    ?>

<h5>bölme</h5>
    <?php 
      $sayi1 = 20;
      $sayi2 = 12;
      $sonuc = $sayi1 / $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 / $sayi2 = $sonuc";
    
    echo "<br><br> atamalı bölme işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger / $ekdeger : " . $deger /=$ekdeger;    
    echo  "<br> $deger";
    ?>

<h5>mod işlemi</h5>
    <?php 
      $sayi1 = 50;
      $sayi2 = 10;
      $sonuc = $sayi1 % $sayi2;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sayi1 % $sayi2 = $sonuc";
    
    echo "<br><br> atamalı mod işlemi: ";
    $deger = 10;
    $ekdeger =59;
    echo "<br>sonuç $deger % $ekdeger = $sonuc";
    ?>

    
<h5>arttırma işlemi</h5>
    <?php 
      $sayi1 = 50;
      $sonuc = ++$sayi1;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sonuc";
    ?>
    <?php 
      $sayi1 = 6;
      $sonuc = --$sayi1;
      $sonuc = --$sayi1;
      $sonuc = --$sayi1;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sonuc";
    ?>
    
    <?php 
      $sayi1 = 9;
      $sonuc = $sayi1--;
      $sonuc = $sayi1--;
      $sonuc = $sayi1--;
      $sonuc = $sayi1;
      echo $sonuc;
      echo "<br>işlemin sonucu: $sonuc";
    ?>
</body>
</html>