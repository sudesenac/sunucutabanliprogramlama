






<!doctype html>
<html lang="tr">
<head>


<link rel='stylesheet' type='text/css' href='kullaniciEkleme.css' />

<meta charset="UTF-8">
<title>Kullanıcı Ekleme</title>



<div class="arkaplan">

  <div class="header">
    <div class="logo">
       <img src="ssc.png" alt="logo" class="logo" width="250" height="100">
    </div>
    <h1>SSC Yurt Karar Destek Sistemleri </h1>
      İşimiz işinizi kolaylaştırmak...


  </div>

  </div>

    <div class="form">
            <form action="kullaniciEkleme.php" method="post">
            <br>
            <br>
            <br>
            <div class="metin">
             <h1>KULLANICI EKLEME FORMU<h1>
            </div>
            <br>
            <br>
            <div class="altmetin">
            <label><b>*Sisteminize eklemek istediğiniz kullanıcı için geçerli bilgileri giriniz..</b></label>
            </div>
            <br>
            <div class="input2">
            <label for="userName"><b> Kullanıcı Adı: </b></label>
            <input type="varchar" name="userName" required>
            </div>
            <div class="input3">
            <label for="userEmail"><b> E-mail Adresi: </b></label>
            <input type="varchar" name="userEmail" required>
            </div>
            <div class="input4">
            <label for="userPass"><b> Yeni Şifre: </b></label>
            <input type="varchar" name="userPass" required>
            </div>
            <br>
            <br>
            <br>
            <div class="button">
            <input type="submit" value="EKLE">
            </div>

            <div class="geri">
            <li><a href="dashboard.php">ANASAYFAYA DÖN</a></li>
            </div>
    </div>
</div>
</form>

</body>

</html>


<?php


//veritabanına veri eklemek için veri tabanı bağlantısını yapıyoruz.
$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "2212";
$vt_adi= "yurtveritabani";

// Bağlantıyı oluştur
$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı Kontrol Et
if ($baglan == false) {
  die("Veritabanı Bağlantısı Başarısız: " . mysqli_connect_error());
}

//Post metodu ile gönderilen verilerimizi alıyoruz.
$userName=$_POST["userName"];
$userPass=$_POST["userPass"];
$userEmail=$_POST["userEmail"];



$ekle= "INSERT INTO `users` (`userName`, `userEmail`, `userPass`) VALUES ('".$userName."','".$userEmail."','".$userPass."')";


if(mysqli_query($baglan,$ekle)){
    echo "Success";
}else{
    echo "Failure" . mysqli_error($baglan);
}
mysqli_close($baglan);

#if ($baglan->query($ekle) === TRUE)
#{
#    echo "Veritabanına veri eklendi.";
#}
#else
#{
 #  echo "Hata: " . $ekle. "<br>" . $baglan->error;
#}


?>
