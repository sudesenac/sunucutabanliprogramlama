<?php
include("adminAyar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>



<link rel='stylesheet' type='text/css' href='dashboard.css' />

<div class="arkaplan">

  <div class="header">
    <div class="logo">
       <img src="ssc.png" alt="logo" class="logo" width="250" height="100">
    </div>
    <h1>SSC Yurt Karar Destek Sislemleri </h1>
    <h2> İşimiz işinizi kolaylaştırmak...</h2>

  </div>
  <div class="solmenu">
      <div class="menu">
              <li><a href="dashboard.php">ANASAYFA</a></li>
              <li><a href="binalar.php">BİNALAR</a></li>
              <li><a href="gr_insmaliyet.php">GRAFİKLER</a></li>
              <li><a href="raporlar.php">RAPORLAR</a></li>
              <li><a href="dataForm.php">YURT EKLEME</a></li>
              <li><a href="kullaniciEkleme.php">KULLANICI EKLEME</a></li>
              <li><a href="logout.php">ÇIKIŞ YAP</a></li>

      </div>
  </div>
  <div class="grafikler">

    <div class="ustkutu">
<div class="anasayfa">
       <img src="anasayfa.png"   >
        <img src="anasayfa2.png"  >


    </div>
  </div>

</div>