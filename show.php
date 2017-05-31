<?php
require_once("database_handler.php");
if( isset($_POST['value1']) && isset($_POST['value2']) && isset($_POST['value3']) ){
	$value1 = $_POST["value1"];
	$value2 = $_POST['value2'];
	$value3 = $_POST['value3'];
	
	$query = "INSERT INTO getwaterlevel(id, userid,waterlevel) VALUES(1,'22','$value1') ON DUPLICATE KEY UPDATE waterlevel='$value1'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query,$databaseHandler);
	
	$query1 = "INSERT INTO getwaterlevel(id,userid,waterlevel) VALUES(2,'23','$value2') ON DUPLICATE KEY UPDATE waterlevel='$value2'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query1,$databaseHandler);
	
	$query2 = "INSERT INTO getwaterlevel(id,userid,waterlevel) VALUES(3,'26','$value3') ON DUPLICATE KEY UPDATE waterlevel='$value3'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query2,$databaseHandler);
	
	if($response['status'] == "success") {
$responseArray = array(
'status'=>'success',
'message'=>'hurray! we updated it',
);
} else {
$responseArray = array(
'status'=>'failure',
'message'=>'Failure while inserting/uploading data',
);
}
	
	} else {
$response = array(
"status"=>"failure",
"message"=>"Please enter all the values",
);
}
echo json_encode($response);
?>