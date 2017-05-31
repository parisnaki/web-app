<?php
error_reporting(0);
require_once("database_handler.php");

$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$value3 = $_POST['value3'];
$value4 = $_POST['value4'];

if( isset($value1) && isset($value2) && isset($value3) && isset($value4) ){
	
	
	
	$query = "update parkingstatus set park_status= '$value1' where id='1' AND park_status='0' and userid='0'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query,$databaseHandler);
	
	$query = "update parkingstatus set park_status= '$value2' where id='2' AND park_status='0' and userid='0'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query,$databaseHandler);
	
	$query = "update parkingstatus set park_status= '$value3' where id='3' AND park_status='0' and userid='0'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query,$databaseHandler);
	
	$query = "update parkingstatus set park_status= '$value4' where id='4' AND park_status='0' and userid='0'";
	$databasehandler = null;
	connectDatabase($databaseHandler);
	$response = updateData($query,$databaseHandler);

	
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