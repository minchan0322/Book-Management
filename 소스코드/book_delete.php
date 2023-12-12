<?php
	require("db_connect.php");
	
	$title = $_REQUEST["title"];
	$query = $db->exec("delete from booklist where title='$title'");
	
	header("Location:book_delete_alert.php");
	exit;
?>