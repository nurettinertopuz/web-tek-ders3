<?php

$gelendosya = $_FILES["cv"];
print_r($gelendosya);
echo "</pre>";


echo "Gelen Dosyanın Adı: ". $gelendosya["name"] . "<br>";
echo "Gelen Dosyanın Mime Türü: ". $gelendosya["type"] . "<br>";
echo "Gelen Dosyanın Temp Dizini: ". $gelendosya["tmp_name"] . "<br>";
echo "Gelen Dosyanın Boyutu: ". $gelendosya["size"] . "<br>";

