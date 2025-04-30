<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>
<body>

<?php
 $erkekler = array("Ali", "Ahmet", "Kemal");
 $kadinlar = array("Ayşe", "Ebru", "Elif");

 echo "<pre>";
 print_r($erkekler);
 echo "</pre>";

 echo "<pre>";
 print_r($kadinlar);
 echo "</pre>";

 echo "Erkekler dizisindeki 1. elemanı: " . $erkekler[0] . "<br>";
 echo "Kadınlar dizisindeki 1. elemanı: " . $kadinlar[0] . "<br>";

 $personel = array(
    "id" => 1,
    "name" => "Elif Nur",
    "surname" => "Candan",
    "graduate" => "Aymes Bilgisayar Programcılığı"
 );
 echo "<pre>";
 print_r($personel);
 echo "</pre>";

 echo "Personelin Adı: " . $personel["name"] . "<br>";
 echo "Personelin Soyadı: " . $personel["surname"] . "<br>";

 /* foreach döngüsüyle dizi içeriğinin yazdırılması*/ 
 foreach ($personel as $key => $value) {
    echo "$key - $value <br>";
 }

?>
  
  <h3>Tanımlı diziye içerik ekleme</h3>
<?php
 
 $degerler = [];

 echo "<pre>";
 print_r($degerler);
 echo "</pre>";

 $degerler[] = "Ocak";
 $degerler[] = "Şubat";
 $degerler[5] = "Mart";
 $degerler["key"] = "Nisan";
 $degerler[] = "Eylül";
 $degerler[3] = "Ekim";

 echo "<pre>";
 print_r($degerler);
 echo "</pre>";


?>

</body>
</html>