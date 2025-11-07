<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Séries</title>
</head>
<body>
<h1>Séries Cadastradas</h1>

<!-- Formulário para adicionar nova série -->
<form action="store.php" method="POST">
    <label>Título:</label>
    <input type="text" name="titulo" required>
    <label>Ano de Lançamento:</label>
    <input type="number" name="ano_lancamento" required>
    <label>Número de Temporadas:</label>
    <input type="number" name="temporadas" required>
    <input type="submit" value="Adicionar Série">
</form>

<hr>

<h2>Lista de Séries</h2>
<div id="series">
    <?php include 'read.php'; ?> <!-- Lista todas as séries -->
</div>
</body>
</html>