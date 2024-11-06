<?php
include("baglan.php");
if (isset($_POST["gonder"])) {

   $ad = $_POST["ad"];
   $soyad = $_POST["soyad"];
   $kullaniciad = $_POST["kullaniciad"];
   $mail = $_POST["email"];
   $tel = $_POST["tel"];
   $sifre = $_POST["sifre"];

   $ekle = mysqli_query($baglanti, "INSERT INTO kayit(ad,soyad, kullanici_ad,mail,tel,sifre) values 
   ('$ad','$soyad','$kullaniciad','$mail''$tel','$sifre')");

   if ($ekle) {
      echo "<script>alert('iletiniz başarıyla alınmıştır')</script>";
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
    <link rel="stylesheet" href="kayit.css"/>
</head>
<body>
    <div class="ana">
<div class="formkutu2">
<div class="baslik">Sitemize Kayıt olun</div>
<form action="kayit.php" method="post">
<input type="text" placeholder="Adınız" name="ad" required><br>
<input type="text" placeholder="Soyadınız" name="soyad" required><br>
<input type="text" placeholder="Kullanıcı Adı" name="kullaniciad" required><br>
<input type="email" placeholder="E-Mailiniz"name="email" required><br>
<input type="tel" placeholder="Telefon Numaranız" name="tel" required><br>
<input type="password" placeholder="Şifreniz"name="sifre" required><br>
<input type="submit" value="Kayıt Ol" name="gonder">
</form>
<div class="yazi">Hesabınız var mı? <br>
<a href="giris.php">Giriş yapın</a></div>
</div>
 </div>
</body>
</html>