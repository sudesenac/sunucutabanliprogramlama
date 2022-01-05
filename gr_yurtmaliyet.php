
<link rel='stylesheet' type='text/css' href='gr_insmaliyet.css' />
<meta charset="UTF-8">

<html>
<head>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 80%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<title>Grafikler</title>

<div class="arkaplan">
  <div class="header">
    <div class="logo">
       <img src="ssc.png" alt="logo" class="logo" width="250" height="100">
    </div>
    <h1>SSC Yurt Karar Destek Sistemleri </h1>
      İşimiz işinizi kolaylaştırmak...
  </div>
</div>>


          <div class="solmenu">
                   <div class="menu">
                    <ul>
                                <li><a href="dashboard.php">ANASAYFA</a></li>
                                <li><a href="gr_insmaliyet.php">İnşaat Maliyetleri</a></li>
                                <li><a href="gr_yurtarsa.php">Yurtların Arsa Özellikleri</a></li>
                                <li><a href="gr_yurtmaliyet.php">Yurt Maliyetleri</a></li>
                                <li><a href="gr_yurtmuhasebe.php">Yurt Gelir-Giderleri</a></li>
                                <li><a href="gr_yurtogrencisayisi.php">Yurtların Öğrenci Durumları</a></li>
                                <li><a href="gr_yurtozellik.php">Yurt Özellikleri</a></li>
                                <li><a href="logout.php">ÇIKIŞ YAP</a></li>
                    </ul>

                </div>

          </div>
    <div class="grafikbaslik">
    <h1>Yurt Maliyet Grafiği </h1>
    </div>


  <div class="grafikler">


    <div class="kutu">
 <div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMaliyetData.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Eşya Maliyetleri Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
     anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMaliyetData2.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Yapım Giderleri Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMaliyetData3.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Güvenlik vs Diğer Giderler Maliyetleri(TL)");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMaliyetData4.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Servis Maliyetleri(TL)");
        chart.container("container");
        chart.draw();
      });
    });
  </script>

  </div>



</body>
</html>