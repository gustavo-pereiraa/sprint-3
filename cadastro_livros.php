<?php

$cod_livro = $_POST['cod_livro'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano_pub = $_POST['ano_pub'];
$isbn = $_POST['isbn'];
$genero = $_POST['genero'];
$edicao = $_POST['edicao'];
$num_pag = $_POST['num_pag'];
$idioma = $_POST['idioma'];
$resumo = $_POST['resumo'];
$formato = $_POST['formato'];
$loc = $_POST['loc'];
$disponibilidade = $_POST['disponibilidade'];

include "conexao.php";

$sql = "INSERT INTO `livros`(`cod_livro`, `titulo`, `autor`, `ano_pub`, `isbn`, `genero`, `edicao`, `num_pag`, `idioma`, `resumo`, `formato`, `loc`, `disponibilidade`) VALUES ('$cod_livro', '$titulo', '$autor', '$ano_pub', '$isbn', '$genero', '$edicao', '$num_pag', '$idioma', '$resumo', '$formato', '$loc', '$disponibilidade')";

if(mysqli_query($con, $sql)){
    echo "Livro cadastrado com sucesso!";
    echo "<br> <a href='cadastro_livros.html'>Voltar</a>";
} else{
    echo "Erro no cadastro: ";
}
?>