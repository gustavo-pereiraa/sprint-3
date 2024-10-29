<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

include "conexao.php";

$sql = "INSERT INTO `cliente`(`nome`, `cpf`, `telefone`) VALUES ('$nome', '$cpf', '$telefone')";

if(mysqli_query($con, $sql)){
    echo "Cliente cadastrado com sucesso!";
    echo "<br> <a href='cadastro_clientes.html'>Voltar</a>";
} else{
    echo "Erro no cadastro: ";
}
?>