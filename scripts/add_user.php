<?php
	print_r($_POST);
foreach ($_POST as $key => $value){
	//echo "$key: $value<br>";
	if (empty($value)){
		//echo "$key<br>";
		//echo "error<br>";
		echo "<script>history.back();</script>";
		exit();
	}
}

//echo "ok";
require_once "./connect.php";
$sql = "INSERT INTO `users` (`city_id`, `firstName`, `lastName`, `birthday`) VALUES ('$_POST[city_id]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]');";
$conn->query($sql);

if ($conn->affected_rows == 0){
	header("location: ../3_db/4_db_table_delete_add_update.php?add_user=0&addUserForm");
}else{
	header("location: ../3_db/4_db_table_delete_add_update.php?add_user=1");

}