<?php


$dsn = 'mysql:host=localhost; dbname=task12'; // dsn = data source name ----- dbname = database name
	$user = 'root';
	$password = '';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
	try{
		$con = new PDO($dsn, $user, $password, $options); // Connection code
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo 'failed ' . $e->getMessage();
	}




	                          

								$result=$con->query("SELECT * FROM `items`;");
								$res = $result->fetchAll();
		$response = array();						
foreach($res as $row){
    array_push($response, array($row['itemname'] , $row['description'] , $row['image'] ));
    
}
echo json_encode($res);
								
?>