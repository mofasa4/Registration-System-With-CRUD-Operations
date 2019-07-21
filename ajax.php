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




	                           if(isset($_POST["display"])){

								$result=$con->query("SELECT * FROM `items`;");
								$res = $result->fetchAll();
								$count = $result->rowCount();

								foreach($res as $row){  
                                  ?>
                                        <div class="col-md-4">
                                            <h3 class='productname text-center' id="productname"><?php echo $row[1]; ?></h3>
                                            <p class='productdescription text-center' id="productdescription" ><?php echo $row[2]; ?></p>
                                            <div>
                                                <img class='productimg img-responsive' id="productimg" src="<?php echo 'images/'.$row[3]; ?>">
                                            </div>
                                        </div>        
        
        
        <?php
             }
                                
            }
//echo json_encode($res);
?>