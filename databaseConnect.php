<?php
$servername = "localhost";
$database = "yurtveritabani";
$username = "root";
$password = "2212";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " .
mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO yurtveritabani.yurtarsaozellik (yurtID, yurtArsaBirimFiyat, yurtArsaMetrekare, yurtArsaTotalMaliyet, yurtTahminiTotalMaliyet) VALUES ('06', '3000', '3000', '100000', '2000000')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
