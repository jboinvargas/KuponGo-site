<?php
include ("config.php");

if ($_POST['nome'] != ''){
  
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
	
	
	$sql = "insert into usuarios values(null, NOW(), '$nome','$email')";
	if ($qr = mysqli_query($conn,$sql)){
		echo "MF000";
		exit;
	}
	else{
		echo "MF256";
		exit;
	}
}
else{
	echo "MF255";
	exit;
}
?>