<?php
session_start();
if (isset($_SESSION["logged"])){
   echo $_SESSION["logged"]["firstName"];
}
echo "test";
//header("location: ../pages/views/logged_user/new_reservation ");
