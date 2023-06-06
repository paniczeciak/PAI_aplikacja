<?php
session_start();
//print_r($_POST);
foreach ($_POST as $key => $value){
	if (empty($value)){
		echo "<script>history.back();</script>";
		exit();
	}
}

if (!isset($_POST["terms"])){
	echo "<script>history.back();</script>";
	$_SESSION["error"] = "Zawierdź regulamin";
	exit();
}

require_once "./connect.php";
//$sql = "INSERT INTO `users` (`city_id`, `firstName`, `lastName`, `birthday`) VALUES ('$_POST[city_id]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]');";
$sql = "UPDATE `users` SET `city_id` = '$_POST[city_id]', `firstName` = '$_POST[firstName]', `lastName` = '$_POST[lastName]', `birthday` = '$_POST[birthday]' WHERE `users`.`id` = $_SESSION[userIdUpdate];";

$conn->query($sql);

if ($conn->affected_rows == 0){
	header("location: ../3_db/4_db_table_delete_add_update.php?add_user=0&addUserForm");
}else{
	header("location: ../3_db/4_db_table_delete_add_update.php?add_user=1");
}