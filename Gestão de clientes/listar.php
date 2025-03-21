<?php
    if (isset($_POST['listar'])):

        include 'conexao.php';
        $sql=mysqli_query($conexao, "SELECT * FROM usuarios ORDER BY Nome");

        echo "<hr></hr>";
        while ($l=mysqli_fetch_array($sql))
        {
            $cpf = $l['cpf'];
            $nome = $l['nome'];
            $telf = $l['telefone'];
            if ($cpf!="")
            {
                echo "<strong>Cpf:</strong> $cpf <br />";
                echo "<strong>Nome:</strong> $nome <br />";
                echo "<strong>Telefone:</strong> $telf <br />";
                echo "<hr></hr>";
            }
        }
    endif;
?>