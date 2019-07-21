<?php
session_start();
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

if (isset($_SESSION['name'])) {

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, a
    maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Products</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/mains.css"/>
	
	<style ></style>
	<!--[if it IE 9]-->
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<!--[endif]-->
</head>
<body>
    
    <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Products</p>
                    <a href="logout.php" class="regbtn">Log out</a>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12" >
                            <h1 class="gradi">Hello <?php echo @$_SESSION['name']?></h1><br>

                            

                        </div>
                      
                           
                        </div>
                    </div>
                    
                </div>
	</div>
<div class='form-content container'>
    <div class="row" id="display">
 

								
                                       
									


</div>
								</div>

                    
	
<!--
    <i class="fab fa-angrycreative "></i>
    
    <i class="fas fa-ambulance "></i><i class="fab fa-connectdevelop fa-4x"></i>
-->
    
    
    
	<!-- external scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>



<?php
}else{
	header('Location: login.php');
}
?>





								

