<HTML>
<HEAD>
	
<meta http-equiv="refresh" content="0; url=produtos.php">
<meta charset=".utf-8">
<script type="text/javascript"></script>
 </HEAD>
<BODY>
<?php 

	$nome=$_POST ['nome'];
	$descricao=$_POST ['descricao'];
	$preco=$_POST ['preco'];
	$marca=$_POST ['marca'];
	$qtd_estoque=$_POST ['qtd_estoque'];
	
		
	
	Require ('conexao.php');
	$sqlinsert ="insert into produtos values ('','$nome','$descricao','$preco','$marca','$qtd_estoque')";
	
	mysqli_query($db, $sqlinsert) or die ('não foi possivel inserir');
	echo "<script> alert ('cadastro realizado com sucesso')</script>"; 
	
?>

</body>
</html>