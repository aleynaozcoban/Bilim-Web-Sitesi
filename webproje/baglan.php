<?php

$dbhost = "localhost";
$dbkullanici = "root";
$dbsifre = "12345678";
$dbadi = "web";

$baglanti = mysqli_connect($dbhost, $dbkullanici, $dbsifre, $dbadi);
;

if(!$baglanti)
{
    die("connection failed:" . mysqli_connect_error());
}
/*
else
{
    echo "Bağlanti gerçekleşti";
}


*/
?>