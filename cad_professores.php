<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="pai">
        <div class="pai1">
            <h1>Cadastro de Professores</h1>
            <a href="cad_professores.php">Cadastrar Professores</a>
            <a href="cad_turnos.php">Cadastrar Turnos</a>
            <a href="listar_professores.php">Listar Professores</a>
            <a href="listar_alunos.php">Listar Alunos</a>
            <a href="listar_turnos.php">Listar Turnos</a>
            <a href="index.php">Index</a>
        </div>
        <div class="fila1">
            <form action="inserir_professores.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="disciplina">Disciplina:</label>
                <input type="text" name="disciplina" id="disciplina">
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>