<?php

$id_cliente = $_POST['id_cliente'];
$telefone = $_POST['telefone'];
$id_livro = $_POST['id_livro'];
$devolucao = $_POST['devolucao'];
$id_usuario = $_POST['id_usuario'];

include "conexao.php";

$sql = "INSERT INTO `emprestimo`(`id_cliente`, `telefone`, `id_livro`, `devolucao`, `id_usuario`) VALUES ('$id_cliente', '$telefone', '$id_livro', '$devolucao', '$id_usuario')";

if(mysqli_query($con, $sql)){
    echo "Emprestimo cadastrado com sucesso!";
    echo "<br> <a href='emprestimo.html'>Voltar</a>";
} else{
    echo "Erro no cadastro: ";
}
?>