<?php 
include 'conexao.php';

if(isset ($_POST['cadastrar'])):
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$sql=mysqli_query($conexao, "INSERT INTO usuarios(cpf, nome, telefone) VALUES('$cpf','$nome','$telefone')");
endif;
?>
