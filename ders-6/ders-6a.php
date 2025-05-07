<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     $personel = array(
        "id"  => 1,
        "name" => "Elif Nur",
        "surname" => "Candan",
        "graduate" => "Aymes Bilgisayar Programcılığı",
     );
     echo "<pre>";
     print_r($personel);
     echo "</pre>";

     echo "dizinin eleman sayısı: " . count($personel) . "<br>";
     echo "dizinin eleman sayısı: " . sizeof($personel) . "<br>";
      
    ?>

    <h5>dizinin başına eleman ekleme</h5>
     <?php
     $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";

     $yeni_eleman_sayisi = array_unshift($isimler, "Aynur", "Kerim");
     echo "yeni dizinin eleman sayısı: $yeni_eleman_sayisi <br>";
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     
     ?>


     <h5>dizinin başına eleman ekleme</h5>
     <?php
     $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";

     $yeni_eleman_sayisi = array_push($isimler, "Aynur", "Kerim");
     echo "yeni dizinin eleman sayısı: $yeni_eleman_sayisi <br>";
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     
     ?>


<h5>diziden eleman çıkarma</h5>
     <?php
     $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye", "Aynur", "Kerim");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";

     echo "diziden kaldırılan 1. elaman: " . array_shift($isimler) . "<br>";
     echo "diziden kaldırılan 2. elaman: " . array_shift($isimler) . "<br>";
     echo "diziden kaldırılan 3. elaman: " . array_shift($isimler) . "<br>";
      
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     ?>


<?php
     $isimler = array("Ali", "Ahmet", "Ayşe", "Huriye", "Aynur", "Kerim");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";

     echo "diziden kaldırılan 1. elaman: " . array_pop($isimler) . "<br>";
     echo "diziden kaldırılan 2. elaman: " . array_pop($isimler) . "<br>";
     echo "diziden kaldırılan 3. elaman: " . array_pop($isimler) . "<br>";
      
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     ?>







<?php
    $market = array(
        "bim" => "BİM",
        "BimSubeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Efeler",
                "semt1" => array(
                    "Girne" => array(1, 2, 3, 4),
                    "Zafer" => array(1, 2, 3, 4)
                ),
                "Nazilli",
                "semt2" => array(
                    "uzuncarsi",
                    "yesil"
                )
            )
        ),
        "A101" => "A101",
    );

    echo "<pre>";
    print_r($market);
    echo "</pre>";

    echo key($market);
 ?>

 <h5>dizilerde explode işlemi</h5>
 <?php
 echo $pizza = "dilim-1, dilim-2, dilim-3, dilim-4";
 $dizi = explode(",", $pizza);
 
 echo "<pre>";
 print_r($pizza);
 echo "</pre>";
 
 ?>


<h5>dizilerde implode işlemi</h5>
<?php
  $isimler = array("Mehmet", "Arif", "Hakkı", "Selim", "Kadir");
  echo "<pre>";
  print_r($isimler);
  echo "</pre>";

  echo $metin = implode(", " , $isimler);
?>
</body>
</html>