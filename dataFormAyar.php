
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
$yurtID=$_POST["yurtID"];
$yurtArsaBirimFiyat=$_POST["yurtArsaBirimFiyat"];
$yurtArsaMetrekare=$_POST["yurtArsaMetrekare"];
$yurtArsaTotalMaliyet=$_POST["yurtArsaTotalMaliyet"];
$yurtTahminiTotalMaliyet=$_POST["yurtTahminiTotalMaliyet"];



$ekle= "INSERT INTO `yurtarsaozellik`(`yurtID`, `yurtArsaBirimFiyat`, `yurtArsaMetrekare`, `yurtArsaTotalMaliyet`, `yurtTahminiTotalMaliyet`) VALUES ('".$yurtID."','".$yurtArsaBirimFiyat."','".$yurtArsaMetrekare."','".$yurtArsaTotalMaliyet."','".$yurtTahminiTotalMaliyet."')";

echo($ekle);

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
