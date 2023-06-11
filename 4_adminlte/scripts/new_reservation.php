<?php
session_start();

foreach ($_POST as $value){
    if (empty($value)){
        $_SESSION["error"] = "Wypełnij wszystkie pola!";
        echo "<script>history.back();</script>";
        exit();
    }
}
$error = 0;

if ($error != 0){
    echo "<script>history.back();</script>";
    exit();
}

require_once "./connect.php";

try {

        $stmt = $conn->prepare("INSERT INTO `reservations` (`restaurant_id`, `user_id`,`table_id`, `reservation_date`,  `startTime`, `endTime`, `created_at`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp());");

    //Przypisanie zmiennych wybranych w formularzu do zmiennych do bazy danych




    $stmt->bind_param("sssssi", $_POST["restaurant_id"], $_POST["user_id"], $_POST["table_id"], $_POST["reservation_date"], $_POST["startTime"], $_POST["endTime"]);

    $stmt->execute();

    if ($stmt->affected_rows == 1){
        $_SESSION["success"] = "Dodano użytkownika $_POST[firstName] $_POST[lastName]";
        header("location: ../pages");
        exit();
    }else{
        $_SESSION["error"] = "Nie dodano użytkownika";
        echo "<script>history.back();</script>";
        exit();
    }
} catch (mysqli_sql_exception $e) {
    $_SESSION["error"] = $e->getMessage();
    echo "<script>history.back();</script>";
}