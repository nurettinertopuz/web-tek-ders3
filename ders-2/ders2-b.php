<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders 2</title>
</head>
<body>
    <h5>ceil işlemi</h5>
    <?php
     $sayi1 = 14.26565;
     echo "Sonuc= " . ceil($sayi1);
    ?>

    
<h5>floor işlemi</h5>
    <?php
     $sayi1 = 24.96565;
     echo "Sonuc= " . floor($sayi1);
    ?>

    
<h5>ceil işlemi</h5>
    <?php
     $sayi1 = 14.26565;
     echo "<br>$sayi1 ";
     echo "<br>ceil işleminin sonucu:" . ceil($sayi1);
    ?>

<h5>round işlemi</h5>
    <?php
     $sayi1 = 57.2546;
     echo "<br>$sayi1 ";
     echo "<br>round işleminin sonucu:" . round($sayi1);

     echo "<br>$sayi1 ";
     echo "<br> ilk iki hanenin sabit tutularak 3. haneye göre round işleminin yapılması" . round($sayi1, 2);
    ?>

<h5>number format işlemi</h5>
    <?php
     $sayi1 = 96264.74865;
     echo "<br>\$sayi1 değişkeninin değeri $sayi1 sonucu sonucu: " . number_format($sayi1);
     echo "<br>\$sayi1 değişkeninin değeri $sayi1 sonucu sonucu: " . number_format($sayi1, 2);
     echo "<br>\$sayi1 değişkeninin değeri $sayi1 sonucu sonucu: " . number_format($sayi1, 2, ",", ".");
    ?>

</body>
</html>