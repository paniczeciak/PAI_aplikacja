<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Użytkownicy</title>
</head>
<body>
<?php
	require_once "../scripts/connect.php";
    //$sql = "SELECT * FROM `users`;";
    $sql = "SELECT firstName, lastName, created_at as data_utworzenia FROM `users`;";
    $result = $conn->query($sql);
    //$user = $result->fetch_assoc();
    //print_r($user);
    //echo $user["firstName"];

    while ($user = $result->fetch_assoc()){
        echo <<< USER
            Imię i nazwisko: $user[firstName] $user[lastName]<br>
            Data dodania użytkownika: $user[data_utworzenia]<hr>
USER;
    }
?>
</body>
</html>
