<?php
include("baglan.php");
if (isset($_POST["gonder"])) {

   $adsoyad = $_POST["iletisimadsoyad"];
   $tel = $_POST["iletisimtel"];
   $mail = $_POST["iletisimmail"];
   $ileti = $_POST["ileti"];

   $ekle = mysqli_query($baglanti, "INSERT INTO ileti(ileti_ad,ileti_tel,ileti_mail,ileti) values 
   ('$adsoyad','$tel','$mail','$ileti')");

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
<title>İletişim</title>
<style type="text/css">  
*{
    margin: 0;
    padding: 0;
    overflow: hidden;
   }
.iletisim{width: 100%;
height: 100%;
background-image: url(images/aesthetic-dark.jpg);
position: absolute; 
background-position: center;
background-size: cover; }

.opak{width: 700px;
height: 500px;
background-color:rgba(207, 207, 207, 0.5);
margin: 50px auto 100px auto;
position: relative;
 }
 .formdivi{ width: 300px;
    height: 700px;
    float: left;
    margin-left: 15px;
    margin-top: 30px;
    padding: 10px;
 }
 h3{
    font-size: 40px;
    color: white;
    text-align: center;
    
 }
 .baslik{
    text-align: center;
    margin: 70px 0 0 0;
 }
input[type="submit"] 
{
font-size: 15px;
letter-spacing: 1px;
padding: 10px 30px;
cursor: pointer;
border-radius: 5px;
margin: 10px 0 0 0;
border: none;
}
input[type="text"] 
{
size: 20px;
letter-spacing: 1px;

}
input[type="email"] 
{
size: 20px;
letter-spacing: 1px;


}
.bilgikismi{float: left;}
h2{
   color: black;
   margin: 40px 0 0 80px;
}
</style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sccale=1">
    <meta name="Author" content="Aleyna Özçoban,ale-na36@hotmail.com">
    <meta name="keywords" content="uzay, boşluk"> 
    <meta name="description" content="Uzay hakkında bilgiler">
    <title>İletişim</title> 
</head>
<body>
    <div class="iletisim">
   <div class="baslik">
   <h3>İLETİŞİM</h3></div>

 <div class="opak">
    <div class="formdivi">
<form action="iletisim.php" method="post">
Adınız ve Soyadınız:</br>
<input type="text" name="iletisimadsoyad" required></br>
Telefon Numaranız</br>
<input type="tel" name="iletisimtel" required></br>
E-posta adresiniz:</br>
<input type="email" name="iletisimmail"required></br>
İletiniz:<br>
<textarea cols="40" rows="10" name="ileti">
</textarea>
<input type="submit" value="Gönder" name="gonder">
</form>
</div>
<div class="bilgikismi">
  
   <h2>Bize Ulaşın:</h2><br>
   <p style="margin: 20px 0 0 80px;"><b>E-posta Adresimiz:</b></p><br>
   <i style="margin: 0 0 0 80px;">uzayweb@hotmail.com</i>
<div class="tel">
<p style="margin: 20px 0 0 80px;"><b>Telefon Numaramız:</b></p><br>
<i style="margin: 0 0 0 80px;">333-33-33</i>


</div>

</div>

 </div>
</div>
</body>

</html>