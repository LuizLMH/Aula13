<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turmas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="pai">
        <div class="pai1">
            <h1>Cadastro de Turnos</h1>
            <a href="cad_professores.php">Cadastrar Professores</a>
            <a href="cad_turnos.php">Cadastrar Turnos</a>
            <a href="listar_professores.php">Listar Professores</a>
            <a href="listar_alunos.php">Listar Alunos</a>
            <a href="listar_turnos.php">Listar Turnos</a>
            <a href="index.php">Index</a>
        </div>
        <div class="filha">
            <form action="inserir_turnos.php" method="post">
                <label for="turno">Turno:</label>
                <input type="text" name="turno" id="turno">
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>