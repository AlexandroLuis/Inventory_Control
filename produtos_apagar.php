<html>
<head>
	<meta charset=".utf-8">
	<script type="text/javascript"></script>
	</head>
<body>
<?php
				ini_set('display_errors', 0 );
				error_reporting(0);
			?>
<?php
	$id=$_GET['id'];
	require('conexao.php');
	$deletar ="delete from produtos where id=$id";
	mysqli_query($db,$deletar);
	if (mysqli_affected_rows()>0){
		echo "<center><h2>Registro excluido com sucesso</h2></center>";
	} 
	else {
		echo "<script>alert('Registro excluido com Sucesso!');
		window.location.href='produtos.php'</script>";
	}
		
?>
</body>
</html>