<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontrol yapıları</title>
</head>
<body>
    <?php
       
    if (3>5) {
        echo "Koşul doğru";
    }
    else {
        echo "Koşul yanlış";    
    }

    echo "<h3>farklı kullanma örneği</h3>";

    if (3>5) :
        echo "Koşul doğru";
    
    else:
        echo "Koşul yanlış" . "<br>";   

     endif; 
     
    
     if (3 > 10) {
        echo "Koşul yanlış 3>10";
    }
    elseif (10 > 15) {
        echo "koşullar doğru 10>15";
    }
    else {
        echo "Koşul koşulların dışında";    
    }

    echo "<h3>saat uygulaması</h3>";

    $saat = 10;
    if ($saat >= 0 && $saat <= 24) {
        if ($saat >= 0 && $saat <= 5) {
            echo "iyi geceler";
        } elseif ($saat >= 6 && $saat <= 8) {
            echo "günaydın";
        } elseif ($saat >= 9 && $saat <= 16) {
            echo "iyi günler";
        } elseif ($saat >= 17 && $saat <= 21) {
            echo "iyi akşamlar";
        } else {
            echo "iyi geceler";
        }
    } else {
        echo "saat hatalı";
    }
    ?>
</body>
</html>