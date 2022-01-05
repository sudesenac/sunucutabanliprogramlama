<?php
  // declare database variables
  // change to the information relevant
  // to your database
  $username = "root";
  $password = "2212";
  $host = "localhost";
  $database="yurtveritabani";

  // connect to database
  //$server = mysql_connect($host, $username, $password);
  //$connection = mysql_select_db($database, $server);
  $connection= mysqli_connect($host, $username, $password, $database);
  // perform query
  // change the query to one relevant to your database
  $myquery = "
    SELECT  yurtID, aylikGelirTahmini FROM  `yurtmuhasebe`
    ";
    $result = mysqli_query($connection, $myquery);

    $data = array();
    while($row = mysqli_fetch_array($result, MYSQLI_NUM))
    {
        $data[] = $row;
    }
    //while($data[]=mysqli_fetch_array($result, MYSQLI_NUM));
  // encode data to json format
  echo json_encode($data);

  // close connection
  mysqli_close($connection);
?>