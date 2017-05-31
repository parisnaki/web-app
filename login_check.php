<?php

include('config.php');

$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database);

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password=$_POST['password'];
  $user_type = $_POST['user_type'];
  
	/*if($user_type == "0")
	{*/
		  $q = "select user_oid, display_name, last_modification_time,user_group_oid from employee_profile where email = '".$email."' and password = '".$password."';";
		  $rec = mysql_query($q) or die(mysql_error());
		  if(mysql_num_rows($rec) > 0)
		  {
		  		$row = mysql_fetch_array($rec);
				session_start();
		  		$_SESSION['user_oid'] = $row['user_oid'];
		  		$_SESSION['display_name'] = $row['display_name'];
		  		$_SESSION['last_modification_time'] = $row['last_modification_time'];
		  		$_SESSION['user_group_oid']=$row['user_group_oid'];
				$q = "update employee_profile set last_modification_time = now() where user_oid = '".$row['user_oid']."';";
				$rec = mysql_query($q) or die(mysql_error());

				header("Location: dashboard.php");
		  }
		  else 
		  {
			  
			header("Location: index.php?msg=Invalid Username/Password!");
		  }
	 /*}
	 else
	 {
			header("Location: index.php?msg=Usertype Not Defined Yet!");
	 }*/

}
?>