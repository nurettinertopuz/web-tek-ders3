<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Ders</title>
</head>

<body>
    <?php
    /* çoklu satırlı açıklama satırı 
oluşturmak için kullanılır */
    // tek satır açıklama satırı oluşturmak için kullanılır
    //phpinfo(); /* bu fonksiyon yüklü olan php versiyonu ve yüklü paketlerin bilgisini yazdırır */
    //php içinde html etiketleri kullanılabilir
    //$x = 10;
    //$y = 2;
    //echo $x + $y;
    //echo(sqrt(64))
    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı <br> merhaba <br>";
    $metin = "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı <br> merhaba <br>";
    echo $metin;

    // değişken içindeki metinsel ifadenin büyük küçük harf dönüşümleri
    echo strtoupper($metin);
    echo $bharf = strtoupper($metin);
    echo $kharf = strtolower($bharf);
    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtolower($bharf2);
    







    ?>
</body>

</html>