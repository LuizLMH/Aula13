<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadástro de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="pai">
        <div class="pai1">
            <h1>Cadastro de Professores</h1>
            <a href="cad_professores.php">Cadastrar Professores</a>
            <a href="cad_turnos.php">Cadastrar Turnos</a>
            <a href="index.php">Index</a>
        </div>
        <div class="filha">
            <form action="inserir.php" method="post">
                <input type="text" name="nome" id="nome" required placeholder="Nome">
                <input type="number" name="idade" id="idade" min="0" max="110" required placeholder="Idade">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>

</html>