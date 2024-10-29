<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Empréstimos</title>
</head>
<body>
    <h1>Consulta de Empréstimos</h1>
    <br>
    <table style="border: 1px solid black">
        <tr>
            <th>ID_Empréstimo</th>
            <th>ID_Cliente</th>
            <th>Telefone</th>
            <th>ID_Livro</th>
            <th>Devolução</th>
            <th>ID_Usuário</th>
        </tr>
        <tbody>
            <?php
            include "conexao.php";

            $sql = "SELECT * FROM emprestimo";
            $dados = mysqli_query($con, $sql);

            while ($linha = mysqli_fetch_array($dados)){
                $id_emprestimo = $linha['id_emprestimo'];
                $id_cliente = $linha['id_cliente'];
                $telefone = $linha['telefone'];
                $id_livro = $linha['id_livro'];
                $devolucao = $linha['devolucao'];
                $id_usuario = $linha['id_usuario'];

                echo "<tr>
                    <td>$id_emprestimo</td>
                    <td>$id_cliente</td>
                    <td>$telefone</td>
                    <td>$id_livro</td>
                    <td>$devolucao</td>
                    <td>$id_usuario</td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
</body>
</html>