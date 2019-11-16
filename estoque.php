<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Constrole de Estoque</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $("li a[href='" + location.href.substring(location.href.lastIndexOf("/") + 1, 255) + "']").addClass("diferente");
        });
    </script>
</head>



<body>
    <div class="header">
        <div>
            <img src="imagens/animals.png" alt="equipe-icon" width="100px" height="100px">
            <p>Cerberus</p>
        </div>
        <h1>Controle de Estoque</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="fornecedores.php">Fornecedores</a></li>
            <li><a href="estoque.php">Estoque</a></li>
        </ul>

    </nav>
    <div class="tab-container">
        <h2><a href=2.relatorio_produto.php? >Estoque</a></h2>
        <table>
            <tr>
                <th>Cod. Produto</th>
                <th>Produto</th>
				<th></th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque Atual</th>
            </tr>
			<?php
				ini_set('display_errors', 0 );
				error_reporting(0);
			?>
			<?php
				require('conexao.php');
				$result = mysqli_query($db, "SELECT * FROM produtos");
				if(!$result){
					echo "" ;
					exit;
				}
		
				$linha =1;
				while($row =mysqli_fetch_assoc($result)) {
					echo "<tr><td>" .$row['id'] ."</td><td>"	    .$row['nome'] ."</td><td>"
									.$row['descricao'] ."</td><td>"	.$row['preco'] ."</td><td>"
									.$row['qtd_estoque'] ."</td><td>";
					$linha++;
				}
				mysqli_free_result($result);
			?>
        </table>
    </div>
</body>

<footer>
    <section id="copyright">
        <h2>Direitos</h2>
        <p>Copyright - todos os direitos reservados | Desenvolvido pela equipe Cerberus</p>
    </section>

</footer>

</html>