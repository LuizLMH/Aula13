<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turnos</title>
</head>

<body>
    <?php
    if (!isset($_POST["turno"])) {
        header("Location: cad_turnos.php");
        exit();
    }
    $turno = $_POST["turno"];
    $sql = "insert into turnos (nome) values('$turno');";
    include 'conecta.php';
    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro bem sucedido";
    } else {
        echo "Provável erro de comunicação com o banco de dados";
    }
    ?>
</body>

</html>