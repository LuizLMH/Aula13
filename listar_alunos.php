<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Alunos Cadastrados</h1>
    <a href="cad_professores.php">Cadastrar Professores</a>
    <a href="cad_turnos.php">Cadastrar Turnos</a>
    <a href="listar_professores.php">Listar Professores</a>
    <a href="listar_alunos.php">Listar Alunos</a>
    <a href="listar_turnos.php">Listar Turnos</a>
    <a href="index.php">Index</a>
    <?php
    include 'conecta.php';
    $sql = "SELECT * FROM alunos";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr><td> ID </td> <td> Nome </td> <td> Idade </td> </tr>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr> <td>" . $linha['id'] . "</td>" .
                "<td>" . $linha['nome'] . "</td>" .
                "<td>" . $linha['idade'] . "</td> </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado";
    }
    ?>
</body>

</html>