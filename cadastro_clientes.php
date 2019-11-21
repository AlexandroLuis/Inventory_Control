<HTML>
<HEAD>
	
<meta http-equiv="refresh" content="0; url=clientes.php">
<meta charset=".utf-8">
<script type="text/javascript"></script>
 </HEAD>
<BODY>
<?php 

	$nome=$_POST ['nome'];
	$email=$_POST ['email'];
	$telefone=$_POST ['telefone'];
	$rua=$_POST ['rua'];
	$bairro=$_POST ['bairro'];		
	
	Require ('conexao.php');
	$sqlinsert ="insert into clientes values ('','$nome','$email','$telefone','$rua','$bairro')";
	
	mysqli_query($db, $sqlinsert) or die ('não foi possivel inserir');
	echo "<script> alert ('cadastro realizado com sucesso')</script>"; 
	
?>

</body>
</html>