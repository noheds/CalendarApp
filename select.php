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

$sql = "SELECT * FROM eventos";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	 

   	$response=json_encode($row);
}  

/*if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_array($result)){
    	
    	$array=$row;

    	}
    	//echo $response = $result;
	}else{

		echo $response="Tabla vacia";
	}*/
 else {
	$response="Error: " . $sql . "" . $conn->error;
}

//echo json_encode(array("result"=>$response, "data"=>$data));
	//echo json_encode($array);
		echo $response;
$conn->close();
?>