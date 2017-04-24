<?php

$conn = new mysqli('us-cdbr-iron-east-03.cleardb.net', 'bfd7d70e584dce', 'b6eb7512', 'heroku_a41f85eea948e5b');

echo 'conetado a la base de datos ';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST['Evento'];
$place=$_POST['Lugar'];
$time=$_POST['Hora'];
$date=$_POST['Fecha'];




	$sql = "INSERT INTO eventos (Evento,Lugar,Hora,Fecha) VALUES ('$name','$place',$time','$date')";


	$result = mysql_query($sql); 

	if ($result === TRUE) {
		echo "New record created successfully";
	   
	}else{
		echo 'error';
		if (mysql_errno()) { 
	  	$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>";
		}
	}



$conn->close();

?>