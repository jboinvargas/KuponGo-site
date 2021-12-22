<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KUPON-GO - Lista Lojistas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
	 

 
 

	<table width="100%" border="1">
		<tr>
			<td>
				Data Cadastro
			</td>
			<td>
				Nome
			</td>
			<td>
				Loja 
			</td>
			<td>
				Email
			</td>
			<td>
				Cep
			</td>
			<td>
				Telefone 
			</td>
		</tr>
<?php
include ("../config.php");

	
	
	$sql = "select * from lojistas";
	$qr = mysqli_query($conn,$sql);
	while ($res = mysqli_fetch_array($qr)) {
		
		$data = utf8_encode(strftime("%d/%m/%Y %H:%M", strtotime($res['data'])));

?>

		<tr>
			<td>
				<?=$data?>
			</td>
			<td>
				<?=$res['nome']?>
			</td>
			<td>
				<?=$res['nomeLoja']?>
			</td>
			<td>
				<?=$res['email']?>
			</td>
			<td>
				<?=$res['cep']?>
			</td>
			<td>
				<?=$res['telefone']?>
			</td>
		</tr>
<?php
	}
?>


  </body>
</html>