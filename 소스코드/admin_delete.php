<?php
	session_start();
	require("db_connect.php");
	
	$id = $_REQUEST["id"];
	$query = $db->exec("delete from admin where id='$id'");
	
	unset($_SESSION["id"]);
	unset($_SESSION["name"]);
	header("Location:admin_delete_alert.php");
	exit;
?>
