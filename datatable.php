<?php

$dsn = 'mysql:host=localhost; dbname=task12'; // dsn = data source name ----- dbname = database name
	$user = 'root';
	$password = '';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
	try{
		$con = new PDO($dsn, $user, $password, $options); // Connection code
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//      $con->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
	}
	catch(PDOException $e){
		echo 'failed ' . $e->getMessage();
	}




	                          
//
//								$result=$con->query("SELECT * FROM `items`;");
//								$res = $result->fetchAll();
//		
//                                echo json_encode($res);




//
//## Read value
//@$draw = $_POST['draw'];
//@$row = $_POST['start'];
//@$rowperpage = $_POST['length']; // Rows display per page
//@$columnIndex = $_POST['order'][0]['column']; // Column index
//@$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
//@$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
//@$searchValue = $_POST['search']['value']; // Search value
//
//$searchArray = array();
//
//## Search 
//$searchQuery = " ";
//if($searchValue != ''){
//   $searchQuery = " AND (itemname LIKE :itemname or 
//        description LIKE :description OR 
//        image LIKE :image ) ";
//   $searchArray = array( 
//        'itemname'=>'%$searchValue%', 
//        'description'=>'%$searchValue%',
//        'image'=>'%$searchValue%'
//   );
//}
//
//## Total number of records without filtering
//$stmt = $con->prepare("SELECT COUNT(*) AS allcount FROM `items` ");
//$stmt->execute();
//$records = $stmt->fetch();
//$totalRecords = $records['allcount'];
//
//## Total number of records with filtering
//$stmt = $con->prepare("SELECT COUNT(*) AS allcount FROM `items` WHERE 1 ".$searchQuery);
//$stmt->execute($searchArray);
//$records = $stmt->fetch();
//$totalRecordwithFilter = $records['allcount'];
//
//## Fetch records
//$stmt = $con->prepare("SELECT * FROM items WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT  :limit, :offset");
//
//// Bind values
//foreach($searchArray as $key=>$search){
//   $stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
//}
//
//$stmt->bindValue(":limit", (int)$row, PDO::PARAM_INT);
//$stmt->bindValue(":offset", (int)$rowperpage, PDO::PARAM_INT);
//$stmt->execute();
//$empRecords = $stmt->fetchAll();
//
//$data = array();
//
//foreach($empRecords as $row){
//   $data[] = array(
//       "id"=>$row['id'],
//      "itemname"=>$row['itemname'],
//      "description"=>$row['description'],
//      "image"=>$row['image']
//   );
//}
//
//## Response
//$response = array(
//   "draw" => intval($draw),
//   "iTotalRecords" => $totalRecords,
//   "iTotalDisplayRecords" => $totalRecordwithFilter,
//   "aaData" => $data
//);
//
//echo json_encode($response);
//	

$params = $columns = $totalRecords = $data = array();
 
	$params = $_REQUEST;
 
	$columns = array(
		0 => 'id',
		1 => 'itemname', 
		2 => 'description',
        3 => 'image'
	);
 
	$where_condition = $sqlTot = $sqlRec = "";
 
	if( !empty($params['search']['value']) ) {
		$where_condition .=	" WHERE ";
		$where_condition .= " ( itemname LIKE '%".$params['search']['value']."%' ";    
		$where_condition .= " OR description LIKE '%".$params['search']['value']."%' )";
	}
 
	$sql_query = " SELECT * FROM items ";
	$sqlTot .= $sql_query;
	$sqlRec .= $sql_query;
	
	if(isset($where_condition) && $where_condition != '') {
 
		$sqlTot .= $where_condition;
		$sqlRec .= $where_condition;
	}
 
 	@$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";
 
//	$queryTot = mysqli_query($con, $sqlTot) or die("Database Error:". mysqli_error($con));
    $queryTot = $con->prepare($sqlTot);
    $queryTot->execute();
 
	$totalRecords =  $queryTot->rowCount();
 
//	$queryRecords = mysqli_query($con, $sqlRec) or die("Error to Get the Post details.");
    $queryRecords = $con->prepare($sqlRec);
    $queryRecords->execute();
    $data = $queryRecords->fetchAll();
 
//	while( $row = mysqli_fetch_row($queryRecords) ) { 
//		$data[] = $row;
//	}	
 
	$json_data = array(
		"draw"            => intval( $params['draw'] ),   
		"recordsTotal"    => intval( $totalRecords ),  
		"recordsFiltered" => intval($totalRecords),
		"data"            => $data
	);
 
	echo json_encode($json_data);

?>