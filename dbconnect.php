<?php

	session_start();


	$dsn = 'mysql:host=localhost; dbname=task12'; // dsn = data source name ----- dbname = database name
	$user = 'root';
	$password = '';
	$options = array(

					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

				);


	try{

		$con = new PDO($dsn, $user, $password, $options); // Connection code
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e){
		echo 'failed ' . $e->getMessage();
	}

	if (@$_POST['register'] == 'register') {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hashedpassword = sha1($password);
		$confirmpass= $_POST['confirmpass'];
		echo $name;
		if ($password == $confirmpass) {
			$_SESSION['name'] = $name;
		$stmt = "INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`)
		 VALUES (NULL, '$name', '$phone', '$email', '$hashedpassword')";

		 // $con->exec("$stmt");
		 
		if ($sql = $con->exec("$stmt")) {
			header('Location: index.php');
		}

		}else{
			echo "passwords didn't match";
		}

	}
	if (@$_POST['login'] == 'login') {
		
		$name1 = $_POST['name1'];
		$password1 = $_POST['password1'];
		$hashedpassword = sha1($password1);
		
		echo $hashedpassword.'<br>' ;
		 
		$_SESSION['name'] = $name1;
		$stmt = $con->prepare("SELECT email, password FROM `users` WHERE name = ? AND password = ? ");
		$stmt->execute(array($name1, $hashedpassword));
		$count = $stmt->rowCount();
		echo $count;
		
		if ($count > 0) {
			echo "hello ".$name1;
			header('Location: index.php');
		}

		

	}



	

?>