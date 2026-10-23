<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Professores</title>
</head>

<body>
    <a href="cad_professores.php">Cadastrar Professores</a>
    <a href="cad_turnos.php">Cadastrar Turnos</a>
    <a href="listar_professores.php">Listar Professores</a>
    <a href="listar_alunos.php">Listar Alunos</a>
    <a href="listar_turnos.php">Listar Turnos</a>
    <a href="index.php">Index</a>
    <?php
    if (!isset($_POST["nome"])) {
        header("Location: cad_professores.php");
        exit();
    }
    $nome = $_POST["nome"];
    $disciplina = $_POST["disciplina"];
    $sql = "insert into professores (nome, disciplina) values('$nome', '$disciplina');";
    include 'conecta.php';
    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos";
    } else {
        echo "Provável erro de comunicação com o servidor";
    }
    ?>
</body>

</html>