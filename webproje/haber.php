<!--
include("baglan.php");
$bul = "SELECT * FROM haberler";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){
        echo "Haber ad:" . $satir["haber_ad"] . "</br>";
        echo "Haber detay:" . $satir["haber_detay"] . "</br>";
    }
}
-->
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
<title>Haberler</title>
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
<p style="width:500px ; height:100px;display:inline-block; margin:50px 0 0 0 ; color:black;  letter-spacing: 20px; font-size:30px;">HABERLER</p></div>
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
<div class="haber1" style="background-image: url(images/c7f6ef67-d067-4900-b2af-de297d044290.jpeg);">
<a href="jameswebb-teleskop.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=1";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber2" style="background-image: url(images/2.jpg); background-position: center ;  background-repeat: no-repeat;">
<a href="buyukteleskop.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=2";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3" style="background-image: url(images/1066493.jpg); background-position: center ; background-repeat: no-repeat;">
<a href="tessuydusu.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=3";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
</div>
<div class="kutu2">
<div class="haber1" style="background-image: url(images/4.jpg);   background-repeat: no-repeat;">
<a href="falcon.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=4";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber2" style="background-image: url(images/5.jpg); background-position: center ;  background-repeat:no-repeat;">
<a href="persevance.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=5";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3" style="background-image: url(images/_112481023_profilepics.jpg);   background-repeat: no-repeat;">
<a href="spaceastro.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=6";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
</div>
<div class="kutu3">
<div class="haber1"style="background-image: url(images/nasa-artemis.png); background-position: center ;  background-repeat: no-repeat;">
    <a href="orion.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=7";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
    </a>
</div>
<div class="haber2"style="background-image: url(images/Screenshot_1.png); background-position: center ;  background-repeat: no-repeat;">
<a href="jeff.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=8";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
    }
}

?>
   </div> 
</div>
</a>
</div>
<div class="haber3"style="background-image: url(images/Screenshot_3.png);  background-repeat: no-repeat;">
<a href="tua.php">
<div class="yazi">
   <div class="baslik">
   <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=9";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_ad"] . "</br>";
     
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
                    <li>Aleyna Ö.</li>
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