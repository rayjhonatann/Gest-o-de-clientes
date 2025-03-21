
<html>
<head>
<title> Cadastro de Cliente </title>
</head>
<body>
<h1>Cadastrar Clientes</h1>
<form method="post" action="">
<label>Nome: </label>
<input name="nome" size = "" type="text">
<br>
<label>Cpf</label>
<input name="cpf" size = "" type="text">
<br>
<label>Telefone</label>
<input name="telefone" size = "" type="text">
<br>
<button type="submit" name="cadastrar" style="background-color:pink; color: black"> Cadastrar</button>
<button type="submit" name="listar" style="background-color:pink; color: black"> Listar</button>
<button type="submit" name="pesquisar" style="background-color:pink; color: black"> Pesquisar</button>
<button type="submit" name="editar" style="background-color:pink; color: black"> Editar</button>
<button type="submit" name="deletar" style="background-color:pink; color: black"> Deletar</button>
</form>
</body>
</html>


<?php
if(isset($_POST['cadastrar'])):
include 'cadastro.php';
endif;
if(isset($_POST['listar'])):
include 'listar.php';
endif;
if(isset($_POST['pesquisar'])):
include 'pesquisar.php';
endif;
if(isset($_POST['editar'])):
include 'editar.php';
endif;
if(isset($_POST['deletar'])):
include 'deletar.php';
endif;
?>
