<?php
$vt_sunucu ="127.0.0.1";
$vt_kullanici ="u0708836_cerenbaydeniz";
$vt_sifre ="Ceren1234.";
$vt_adi ="u0708836_petstylist";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
mysqli_set_charset($baglan, "UTF8");

if(!$baglan)
{
 die("veri tabanı bağlantı işlemi başarısız".mysqli_connect_error());
} 

 ?>
 

