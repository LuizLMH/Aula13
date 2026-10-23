<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
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
        header("Location: index.php");
        exit();
    }
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sql = "insert into alunos (nome, idade) values('$nome', $idade);";
    include 'conecta.php';
    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos";
    } else {
        echo "Falha na conexão com o banco de dados";
    }
    ?>
</body>

</html>