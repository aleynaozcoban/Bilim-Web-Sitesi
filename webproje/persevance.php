<html>
<head>
<title>Perseverance Mars’ta Yeni Örnekler Topluyor</title>
<style type="text/css">
*{margin: 0; padding: 0;}
.ust{height: 300px; width: auto; background-image: url(images/ddd.jpg); z-index: 3;}
.header{height: 70px; background-color: black; }
.logo{width: 94px; height: 70px; background-image: url(images/Adsıztasarım2.png); float: left; margin: 0; padding: 0;}
.arama{ height:100px; float: left; font-size: 20px; margin: 28px 0 0 1000px;}
.giris{width:70px; height: 25px;border:1px solid white ; border-radius: 10px; color:white; font: 20px normal; float: left; text-align: center; margin: 25px 0 0 100px; padding-top:3px ;}
.giris a{display: block; text-decoration: none; color: white;}
.giris a:hover{color: #C4B6B6; border-color:  #C4B6B6;}

.ensol{width: 120px; height: 570px; position: sticky; top: 0; background-color: black; margin: -520px 0 0 0;}
.menu ul li{list-style-type:none ; padding-bottom: 50px ; padding-top:20px; position: relative; }
.menu ul li a{  display:block; text-decoration: none;  color: white; font-size: 20px;}
.menu ul li a:hover{color: gray; text-decoration: underline;}
.alt{height: auto; width: 100%;}
.sol{width: 1000px; height: auto;  margin: 0 auto;}
.baslik{font-weight: bold; color:rgb(237, 183, 118); height: 100px; width: 750px; font-size: 35px; text-align: center; margin-left: 100px;}
.yazi{word-wrap: break-word; font-size: 20px; line-height: 40px; font-family: 'Times New Roman', Times, serif;}

.footer { background:black;width:100%; height:275px;float:left;color:white; font-family:arial;}
.footer #kutu b {font-size:14px;}
*{margin: 0; padding: 0;}
.footer_container{width:768px; height:175px; margin:30px auto;}
ul {list-style-type:none;margin:17px 0;padding:0px;}
#kutu {width:auto; height:125px; float:left;}
ul li {float:left;font-family:tahoma; font-size:12px; margin-bottom:8px; clear:left; color:#949798; }
#kutu:last-child li {float:left;clear:none;margin-right:10px;}
.logo2{width: 94px; height: 70px; background-image: url(images/Adsıztasarım2.png); float: left; position: relative; left: -200px;}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>
<div style="width:100%; height:2300px;">
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
    <div style="width: 600px ; height:500px;  margin: -300px auto 0 auto; background-image:url(images/5.jpg) ;z-index: 2;  box-shadow:0 2px 12px rgb(0 0 0 / 12%);">
</div>
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
    <div class="sol">
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
        <div class="yazi">
        <?php 
include("baglan.php");
$bul = "SELECT * FROM haberler where haber_id=5";
$kayit = $baglanti->query($bul);
if($kayit->num_rows>0){
    while($satir=$kayit->fetch_assoc()){

        echo $satir["haber_detay"] . "</br>";
     
    }
}
?>

        </div>
    </div>
  </div>
  <img src="images/thumbs_b_c_865b1fe57ef2bcb8c092f00b12577468.jpg" alt="" style="margin: 50px 0 0 330px; width: 800px;">
  <br>
  



  <div id="sagdakayan" style="position: fixed; right: 0px; top: 0px; z-index: 1; border: 1px solid white;"><!-- www.htmlkodbre.tr.gg --> <img src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240"> <!-- www.htmlkodbre.tr.gg --> </div>
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