<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include "conexao.php";

$sql = "INSERT INTO `usuario`(`nome`, `cpf`, `telefone`, `email`, `senha`) VALUES ('$nome', '$cpf', '$telefone', '$email', '$senha')";

if(mysqli_query($con, $sql)){
    echo "Usuário cadastrado com sucesso!";
    echo "<br> <a href='cadastro.html'>Voltar</a>";
} else{
    echo "Erro no cadastro: ";
}
?>