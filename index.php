<?php

$conn = new mysqli('us-cdbr-east.cleardb.com', 'adffdadf2341', 'adf4234', 'heroku_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$action=$_POST['action'];

$name=$_POST['Evento'];
$place=$_POST['Lugar'];
$time=$_POST['Hora'];


if($action=='insert'){

	$sql = "INSERT INTO eventos (Evento,Lugar,Hora) VALUES ('$name','$place',$time')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	   
	}

}

$conn->close();

?>