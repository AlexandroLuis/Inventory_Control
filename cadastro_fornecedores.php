<HTML>
<HEAD>
	
<meta http-equiv="refresh" content="0; url=fornecedores.php">
<meta charset=".utf-8">
<script type="text/javascript"></script>
 </HEAD>
<BODY>
<?php 

	$Nome_fornecedor=$_POST ['fornecedor'];
	$Email_fornecedor=$_POST ['email'];
	$Tel_fornecedor=$_POST ['telefone'];

		
	
	Require ('conexao.php');
	$sqlinsert ="insert into fornecedor values ('','$Nome_fornecedor','$Email_fornecedor','$Tel_fornecedor')";
	
	mysqli_query($db, $sqlinsert) or die ('não foi possivel inserir');
	echo "<script> alert ('cadastro realizado com sucesso')</script>"; 
	
?>

</body>
</html>