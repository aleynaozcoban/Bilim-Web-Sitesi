<?php
include("baglan.php");
if (isset($_POST["gonder"])) {

   $kullanici = $_POST["kullaniciad"];
   $sifre = $_POST["password"];
   

   $ekle = mysqli_query($baglanti, "INSERT INTO giris(kullaniciad,sifre) values 
   ('$kullanici','$sifre')");

   if ($ekle) {
      echo "<script>alert('Girişiniz başarıyla yapılmıştır.ss')</script>";
} 
   else {
      echo "kayıt basarılı değilllllllllll";
   }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uzay Web</title>  
    <link rel="stylesheet" href="giris.css"/>
</head>
<body>
<div class="main">
<div class="formkutu">
    <div class="baslik">Sitemize Giriş Yapın</div>
    <form action="giris.php" method="post">
        <!--Label ile de dene-->
<input type="text" placeholder="Kullanıcı Adı" name="kullaniciad" required><br>
<input type="password" placeholder="Şifreniz"name="password" required><br>
<input type="submit" value="Giriş Yap" name="gonder">
    </form>
  <div class="yazi">Bir hesabınız yok mu? <br>
    <a href="kayit.php">kayıt olun</a></div>
    </div>
</div>
</div>
</body>
</html>