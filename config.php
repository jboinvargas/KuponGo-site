<?php
error_reporting(0);
session_start();

$localhost = "localhost";
$user = "kupongo_admin";
$pass = "@KupongoAdmin2020";
$db = "kupongo_bd";

$conf_titulo = "Admin - Kupon-GO";


//conecção com o banco
$conn = mysqli_connect($localhost, $user, $pass, $db);

?>