<?php
include 'conexao.php'; // Inclui a conexão

// Verifica se o ID da série foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM series WHERE id=$id"; // Consulta a série
    $result = $conn->query($sql);
    $serie = $result->fetch_assoc();
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $ano_lancamento = $_POST['ano_lancamento'];
    $temporadas = $_POST['temporadas'];

    $sql = "UPDATE series SET titulo='$titulo', ano_lancamento=$ano_lancamento, temporadas=$temporadas WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: read.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Série</title>
</head>
<body>
    <h1>Atualizar Série</h1>
    <form action="" method="POST">
        Título: <input type="text" name="titulo" value="<?php echo $serie['titulo']; ?>" required><br>
        Ano de Lançamento: <input type="number" name="ano_lancamento" value="<?php echo $serie['ano_lancamento']; ?>" required><br>
        Número de Temporadas: <input type="number" name="temporadas" value="<?php echo $serie['temporadas']; ?>" required><br>
        <input type="submit" value="Atualizar Série">
    </form>
    <a href="read.php">Cancelar</a>
</body>
</html>