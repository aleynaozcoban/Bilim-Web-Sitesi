<?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where id=[haber_id]";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){
        echo "Haber ad:" .$satir["haber_resimyol"] . "</br>";
        echo "Haber detay:" . $satir["haber_detay"] . "</br>";
        
    }
}

?>

<html>
<head>
<title>Bilgiler</title>
<link rel="stylesheet" href="haber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>
<div class="header">
<div class="logo"></div>
<div class="arama">
  <a href=""><i class="fa-solid fa-magnifying-glass" style="color:white;"></i></a> 
</div>
<div class="giris">
<a href="giris.php">Giriş</a>
</div>
</div>
<div class="ust"></div>
    <div style="width: 600px ; height:150px; text-align: center; margin: -60px auto 0 auto; background-color:white; z-index: 2;  box-shadow:0 2px 12px rgb(0 0 0 / 12%);">
<p style="width:500px ; height:100px;display:inline-block; margin:50px 0 0 0 ; color:black;  letter-spacing: 20px; font-size:30px;">BİLGİLER</p></div>
<div class="ensol">
<div class="menu">
      <ul>
      <li><a href="index2.php">Ana Sayfa</a></li>
      <li><a href="hakkımızda.php">Hakkımızda</a></li>
      <li><a href="haber.php">Haberler</a></li>
      <li><a href="bilgi.php">Bilgiler</a></li>
      <li><a href="iletisim.php">İletişim</a></li>
      </ul>
  </div>
  </div>
<div class="alt">
<div class="kutu">
<div class="haber1" style="background-image: url(images/1gagarin.jpg);">
<a href="a.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=1";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber2" style="background-image: url(images/1james.jpg); background-position: center ;  background-repeat: no-repeat;">
<a href="b.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=2";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3" style="background-image: url(images/300px-Bruce_McCandless_II_during_EVA_in_1984.jpg);background-position: center ;  background-repeat: no-repeat;">
<a href="astronotlar.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=6";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
</div>
<div class="kutu2">
<div class="haber1" style="background-image: url(images/marsta-yasam-a.jpg);   background-repeat: no-repeat;">
<a href="mars.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=4";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber2" style="background-image: url(images/vladimirko.jpg);  background-repeat:no-repeat;">
<a href="vladimir.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=5";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3" style="background-image: url(images/challenger-kaza.jpg); background-position: center ;  background-repeat: no-repeat;">
<a href="chalenger.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=3";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
</div>
<div class="kutu3">
<div class="haber1"style="background-image: url(images/1uzaynedir.jpg); background-position: center ;  background-repeat: no-repeat;">
    <a href="uzay-nedir.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=7";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
    </a>
</div>
<div class="haber2"style="background-image: url(images/vladimirko.jpg);   background-repeat: no-repeat;">
<a href="">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=5";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3"style="background-image: url(images/challenger-kaza.jpg); background-position:center; background-repeat: no-repeat;">
<a href="">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM bilgiler where bilgi_id=3";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["bilgi_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
</div>
</div>
<div class="footer">
		<div class="footer_container">
    <div class="logo2"></div>
			<div id="kutu">
				<b>Sayfalar</b>
				<ul>
					<li>Ana Sayfa</li>
					<li>Hakkımızda</li>
					<li>Haberler</li>
					<li>Bilgiler</li>
					<li>İletişim</li>
				</ul>
			</div>
			<!--kutu###-->
			<!--kutu-->
			<div id="kutu" style="margin-left:150px;">
				<b>İletişim</b>
				<ul>
					<li>Yusuf Ö.</li>
					<li>0533 333 33 33</li>
					<li>uzayweb@hotmail.com</li>
				
				</ul>
			</div>
			<!--kutu###-->
			<!--kutu-->
			<div id="kutu" style="margin-left:150px;">
				<b>Sosyal Medya</b>
				<ul>
                <a href=""><li><img src="images/face.png" alt="" width="46"></li></a>
					<a href="https://www.instagram.com/ysf.onerbay/"><li><img src="images/ind.png" alt="" width="46"></li></a>
          <a href="https://twitter.com/elonmusk"><li><img src="images/twi.png" alt="" width="46"></li></a>
				</ul>
			</div>
      
		</div>
    <i>Telif Hakkı © 2022 Tüm hakları saklıdır.</i></br> <i>Uzay.web</i>
	</div>
</body>
</html>