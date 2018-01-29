<?php

include ("db.php");

		$id = $_GET['id'];

		$delete = mysql_query("DELETE FROM `user_table` WHERE id ='$id'");
		
		header("location:record.php");

?>