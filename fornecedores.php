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
    <div class="inserir">
        <ul>
            <li><a href="in-fornecedor.php">Cadastrar Fornecedor</a></li>
            <li>
                <form method="post" action="processa.php">
                    <input type="text" name="busca" class="campo">
                    <input type="submit" value="Buscar" class="btn">
                </form>

            </li>
        </ul>
    </div>

    <div class="tab-container">
        <h2><a href=2.relatorio_fornecedor.php? >Fornecedores</a></h2>
        <table>
            <tr>
                <th>Fornecedor</th>
                <th>E-mail</th>
                <th>Telefone</th>
				<th>Alterar</th>
            </tr> 
			<?php
				ini_set('display_errors', 0 );
				error_reporting(0);
			?>
			<?php
				require('conexao.php');
				$result = mysqli_query($db, "SELECT * FROM fornecedor");
				if(!$result){
					echo "" ;
					exit;
				}
		
				$linha =1;
				while($row =mysqli_fetch_assoc($result)) {
					echo "<tr><td>"	.$row['Nome_fornecedor'] ."</td><td>" .$row['Email_fornecedor'] 
					."</td><td>" .$row['Tel_fornecedor'] ."</td><td>" ."<a href=2.alterar_fornecedor.php?id=".$row['id'] ."''>
					Alterar</a>";
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