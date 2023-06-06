<?php
	//var_dump($_GET);
	//print_r($_GET);
	require_once "connect.php";
//	$sql = "DELETE FROM users WHERE `users`.`id` = 1";
	$sql = "DELETE FROM users WHERE `users`.`id` = $_GET[userIdDelete]";
//	$sql = "DELETE FROM users WHERE `users`.`firstName` = 'Anna'";
	$conn->query($sql);
//	echo $conn->affected_rows;
if ($conn->affected_rows == 0){
//	echo "error";
//	header("location: ../3_db/2_db_table.php?userDel=0");
	header("location: ../3_db/4_db_table_delete_add_update.php?userDel=0");
}else{
//	echo "ok";
//	header("location: ../3_db/2_db_table.php?userDel=$_GET[userIdDelete]");
	header("location: ../3_db/4_db_table_delete_add_update.php?userDel=$_GET[userIdDelete]");

}