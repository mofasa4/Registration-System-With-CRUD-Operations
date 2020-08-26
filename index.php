<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_SESSION['name'])) {

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, a
    maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Home</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/datatables.min.css"/>
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
                    <p>Home</p>
                    <a href="logout.php" class="regbtn">Log out</a>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12" >
                            <h1 class="gradi">Hello <?php echo @$_SESSION['name']?></h1>
                        </div>
                      
                           
                        </div>
                    </div>
                    
                </div>

                    
	
<!--
    <i class="fab fa-angrycreative "></i>
    
    <i class="fas fa-ambulance "></i><i class="fab fa-connectdevelop fa-4x"></i>
-->
    
    
    
	<!-- external scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>



<?php
}else{
	header('Location: login.php');
}

?>
    
    
    
            <div class="col-md-12">
                        	<div class="row">
                        		<div class="col-md-4 admin">
                                        <button type="button" class="btn btn-success additem">Add Item</button><br>
                                    
                                        <br>
                                    
                                    	<div class="form-group hiden">
                                            <input type="text" id="item" class="form-control" name="item" placeholder="Item title " autocomplete="off"><br>
                                            <input type="text" id="itemdes" class="form-control" name="description" placeholder="Item description" autocomplete="off"><br>
                                            <input type="file" id="itemimg" class="form-control"class="form-control" name="image" accept="image/*" directory ><br>
                                            <input type="hidden" id="itemspecs" name="itemspec" value="specs">
                                            <button type="button" id="submit" class="btnSubmit">submit</button>
                                        </div>
                        		</div>
                                <div class="col-md-12 admin">
                                    <table id="memListTable" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Item name</th>
                                                <th>Item description</th>
                                                <th>image</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Item name</th>
                                                <th>Item description</th>
                                                <th>image</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                        		</div>
                        		
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
										if(@$_POST['itemspec'] == 'specs' ){
                                          
											@$itemname = $_POST['item'];
											@$description = $_POST['itemdes'];
											@$image =$_POST['itemimg'];
                                            $stmt = "INSERT INTO `items` (`id`, `itemname`, `description`, `image`) 
											VALUES (NULL, '$itemname', '$description', '$image');";
											 $con->exec("$stmt");
//                                            require_once "PHPMailer/PHPMailer.php";
//                                            require_once "PHPMailer/Exception.php";
//                                            require_once "PHPMailer/SMTP.php";
//                                            
//                                            $mail = new PHPMailer();
//                                            
////                                            smtp settings
//                                            $mail->isSMTP();   
////                                            $mail->SMTPDebug = 2;
//                                            $mail->Host = "smtp.gmail.com";
//                                            $mail->SMTPAuth = true;
//                                            $mail->Username = "";                 
//                                            $mail->Password = "";
//                                            $mail->Port = 465; //465
//                                            $mail->SMTPSecure = "ssl";//ssl
//                                            
////                                            Email Settings
//                                            $mail->isHTML(true);
//                                            $mail->setFrom("momo@gmail.com","momo");
//                                            $mail->addAddress("");
//                                            $mail->Subject = $itemname;
//                                            $mail->Body = $description;
//                                            if(!$mail->send()) 
//                                            {
//                                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                            } 
//                                            else 
//                                            {
//                                                echo "Message has been sent successfully";
//                                            }
//                                            
											
                                              
                                             
										}


										?>
                        		
                        		




                        	</div>
           			</div>
        	
