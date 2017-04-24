<?php

$conn = new mysqli('us-cdbr-iron-east-03.cleardb.net', 'bfd7d70e584dce', 'b6eb7512', 'heroku_a41f85eea948e5b');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$action=$_POST['action'];

$name=$_POST['Evento'];
$place=$_POST['Lugar'];
$time=$_POST['Hora'];
$date=$_POST['Fecha'];


if($action=='insert'){

	$sql = "INSERT INTO eventos (Evento,Lugar,Hora,Fecha) VALUES ('$name','$place',$time','$date')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	   
	}

}

$conn->close();

?>