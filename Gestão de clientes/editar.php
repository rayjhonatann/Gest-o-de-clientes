<<html>
	<head>
		<title>Editar Clientes</title>
	</head>
	<body>
		<h1>Editar Clientes</h1>
	
		<?php 
		include 'conexao.php';
		$sql=mysqli_query($conexao,"SELECT * FROM usuarios ORDER BY Nome");
		
		while($l=mysqli_fetch_array($sql))
		{
		    $cpf = $l['cpf'];
		    $nome = $l['nome'];
		    $telefone = $l['telefone'];
		    if ($cpf!="")
		    {
		        echo "<strong>Cpf:</strong> $cpf <br> />";
		        echo "<strong>Nome:</strong> $nome <br> />";
		        echo "<strong>Telefone:</strong> $telefone <br> />";
		        echo "<a href= ValidarAlteracao.php?cpf=$cpf>Editar</a>";
		        echo "<hr></hr>";
		    }
		}
?>
	</body>
</html>