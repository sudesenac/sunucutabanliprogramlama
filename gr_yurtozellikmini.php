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
      anychart.data.loadJsonFile("yurtOzelliklerData.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yurtların Oda Sayısı Grafiği");
        chart.container("container");
        chart.draw();
      });
    });
     anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtOzelliklerData2.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Yerleşim Merkezine Yakınlık Grafiği");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtOzelliklerData3.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Üniversiteye Yakınlık Grafiği");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtOzelliklerData4.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Konum Avantajı Grafiği");
        chart.container("container");
        chart.draw();
      });
    });
  </script>
</body>
</html>