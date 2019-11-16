<?php 
	$id=$_GET['id'];
	require('conexao.php');
	$select= "SELECT * from produtos where id ='$id' ";
	$result = mysqli_query($db,$select);
	if(!$result){
	die (mysql_error());
	}
	$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
	<meta charset ="utf-8">
</head>
<body>
	<form action="2.envio_alterar_produtos(1).php" method="GET">
	<input name="id" type="hidden" value ="<?php echo $row['id']?>"<br>
	Nome do Produto: <input name="nome" type="text" value="<?php echo $row['nome']?>"<br>  
	<input type="submit" value="Alterar" name="btSalvar"><br/>
	<input type="submit" value="Cancelar" name="btSair" onclick="location.href='produtos.php'; ">
	</form>
</body>
</html>