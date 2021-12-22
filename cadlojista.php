<?php
include ("config.php");

if ($_POST['nome'] != ''){
  
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $loja = mysqli_real_escape_string($conn, $_POST['loja']);
  $cep = mysqli_real_escape_string($conn, $_POST['cep']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	
	
	
	$sql = "insert into lojistas values(null, NOW(), '$nome', '$loja','$email', '$cep', '$telefone')";
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