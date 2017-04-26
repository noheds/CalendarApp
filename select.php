<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'us-cdbr-iron-east-03.cleardb.net';
$username = 'bfd7d70e584dce';
$password ='b6eb7512';
$dbname = 'heroku_a41f85eea948e5b';

$con=mysqli_connect($servername,$username,$password,$dbname);
  // Check connection
  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "Select * from eventos";

  $result = mysqli_query($con,$query);

  $rows = array();

  while($r = mysqli_fetch_array($result)) {
    $rows["Evento"] = $r;
  }

  echo json_encode($rows);

  mysqli_close($con);
?>