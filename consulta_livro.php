<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Livros</title>
</head>
<body>
    <h1>Consulta de Livros</h1>
    <br>
    <table style="border: 1px solid black">
        <tr>
            <th>ID_Livro</th>
            <th>Cod_Livro</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano_Pub</th>
            <th>ISBN</th>
            <th>Gênero</th>
            <th>Edição</th>
            <th>Num_Pag</th>
            <th>Idioma</th>
            <th>Resumo</th>
            <th>Formato</th>
            <th>Loc</th>
            <th>Disponibilidade</th>
        </tr>
        <tbody>
            <?php
            include "conexao.php";

            $sql = "SELECT * FROM livros";
            $dados = mysqli_query($con, $sql);

            while ($linha = mysqli_fetch_array($dados)){
                $id_livro = $linha['id_livro'];
                $cod_livro = $linha['cod_livro'];
                $titulo = $linha['titulo'];
                $autor = $linha['autor'];
                $ano_pub = $linha['ano_pub'];
                $isbn = $linha['isbn'];
                $genero = $linha['genero'];
                $edicao = $linha['edicao'];
                $num_pag = $linha['num_pag'];
                $idioma = $linha['idioma'];
                $resumo = $linha['resumo'];
                $formato = $linha['formato'];
                $loc = $linha['loc'];
                $disponibilidade = $linha['disponibilidade'];

                echo "<tr>
                    <td>$id_livro</td>
                    <td>$cod_livro</td>
                    <td>$titulo</td>
                    <td>$autor</td>
                    <td>$ano_pub</td>
                    <td>$isbn</td>
                    <td>$genero</td>
                    <td>$edicao</td>
                    <td>$num_pag</td>
                    <td>$idioma</td>
                    <td>$resumo</td>
                    <td>$formato</td>
                    <td>$loc</td>
                    <td>$disponibilidade</td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
</body>
</html>