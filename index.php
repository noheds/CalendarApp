<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'us-cdbr-iron-east-03.cleardb.net';
$username = 'bfd7d70e584dce';
$password ='b6eb7512';
$dbname = 'heroku_a41f85eea948e5b';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$response= 'conectado a la base de datos';

$data=$_POST;

$name=$_POST['Evento'];
$place=$_POST['Lugar'];
$time="";//$_POST['Hora'];
$date="";//$_POST['Fecha'];

$sql = "INSERT INTO eventos (Evento,Lugar,Hora,Fecha) VALUES ('$name','$place','$time','$date');";

$response="OK";
	
if ($conn->query($sql) === TRUE) {
	$response="Record added successfully";
} else {
	$response="Error: " . $sql . "" . $conn->error;
}

echo json_encode(array("result"=>$response, "data"=>$data));

$conn->close();
?>