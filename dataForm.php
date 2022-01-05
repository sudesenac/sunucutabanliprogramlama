






<!doctype html>
<html lang="tr">
<head>


<link rel='stylesheet' type='text/css' href='dataform.css' />

<meta charset="UTF-8">
<title>Yurt Ekleme</title>



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
            <form action="dataForm.php" method="post">
                <br>
                <br>
                <br>
                <br>
            <div class="metin">
             <h1>YURT BİLGİSİ GİRİŞ FORMU<h1>
            </div>
            <br>
            <div class="altmetin">
            <label><b>*Girilen bilgiler teyit edilip, diğer veriler, ileri aşamalarda; tarafımızdan ulaşılarak istenecektir.</b></label>
            </div>
            <br>
            <br>
            <div class="input2">
            <label for="yurtID"><b> Arsa Birim Fiyatı : </b></label>
            <input type="int" name="yurtArsaBirimFiyat" required>
            </div>
            <div class="input3">
            <label for="yurtID"><b> Arsa Metrekare Alanı : </b></label>
            <input type="int" name="yurtArsaMetrekare" required>
            </div>
            <div class="input4">
            <label for="yurtID"><b> Arsanın Toplam Fiyatı : </b></label>
            <input type="int" name="yurtArsaTotalMaliyet" required>
            </div>
            <div class="input5">
            <label for="yurtID"><b> Yurt Tahmini Toplam Maliyeti : </b></label>
            <input type="int" name="yurtTahminiTotalMaliyet" required>
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
$yurtArsaBirimFiyat=$_POST["yurtArsaBirimFiyat"];
$yurtArsaMetrekare=$_POST["yurtArsaMetrekare"];
$yurtArsaTotalMaliyet=$_POST["yurtArsaTotalMaliyet"];
$yurtTahminiTotalMaliyet=$_POST["yurtTahminiTotalMaliyet"];



$ekle= "INSERT INTO `yurtarsaozellik`(`yurtArsaBirimFiyat`, `yurtArsaMetrekare`, `yurtArsaTotalMaliyet`, `yurtTahminiTotalMaliyet`) VALUES ('".$yurtArsaBirimFiyat."','".$yurtArsaMetrekare."','".$yurtArsaTotalMaliyet."','".$yurtTahminiTotalMaliyet."')";


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
