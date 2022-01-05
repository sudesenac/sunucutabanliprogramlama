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
      anychart.data.loadJsonFile("yurtMuhasebeData.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Tahmini Aylık Gelirler Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
     anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMuhasebeData2.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Tahmini Aylık Giderler Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
         anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("yurtMuhasebeData3.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data).title("Tahmini Aylık Giderler Grafiği(TL)");
        chart.container("container");
        chart.draw();
      });
    });
  </script>
</body>
</html>