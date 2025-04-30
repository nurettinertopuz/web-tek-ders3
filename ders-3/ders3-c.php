<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global değişkenler</title>
</head>
<body>
    <form action="" method="POST">

     <label for="kullanici">Kullanıcı Adı: </label>
     <input type="text" name="username" id="kullanici">
     <br>
     <label for="sifre">Şifre: </label>  
     <input type="password" name="password" id="sifre">
     <br>
     <input type="submit" value="Giriş Yap">
    </form>

    <?php
    
    $kullanici_adi = $_REQUEST["username"];
    $kullanici_sifre = $_POST["password"];
    
    echo "Formdan Kullanıcı Adı: $kullanici_adi <br>";
    echo "Formdan Kullanıcı Şifresi: $kullanici_sifre <br>";
    
    if ($kullanici_adi == "Ali" AND $kullanici_sifre == "123") 
    {
      echo "Kullanıcı adı ve şifresi doğru";  
    }

    ?>
</body>
</html>