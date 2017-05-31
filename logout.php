<?php
	session_start();
	unset($_SESSION['user_oid']);
	session_start();
	unset($_SESSION['display_name']);
	session_start();
	unset($_SESSION['last_modification_time']);
	session_destroy();
	header('location: index.php');
	exit;
?>