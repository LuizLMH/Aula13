<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Professores</title>
</head>

<body>
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