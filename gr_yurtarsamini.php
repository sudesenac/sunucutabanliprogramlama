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
  <div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtArsaData.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Arsa Birim Alanı Grafiği(m²)");
        chart.container("container");
        chart.draw();
      });
    });
     anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtArsaData2.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Arsa Birim Fiyat Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtArsaData3.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Arsa Maliyeti Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtArsaData4.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Toplam Yapım Maliyeti Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
  </script>
</body>
</html>