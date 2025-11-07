<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = trim($_POST['titulo']);
    $ano = (int) $_POST['ano_lancamento'];
    $temporadas = (int) $_POST['temporadas'];

    if ($titulo == "" || $ano <= 0 || $temporadas <= 0) {
        echo "Preencha todos os campos corretamente!";
    } else {
        $sql = "INSERT INTO series (titulo, ano_lancamento, temporadas)
                VALUES ('$titulo', $ano, $temporadas)";
        if ($conn->query($sql) === TRUE) {
            header("Location: read.php");
            exit;
        } else {
            echo "Erro ao inserir: " . $conn->error;
        }
    }
}
?>

<h2>Adicionar Série</h2>
<form method="POST">
    Título: <input type="text" name="titulo" required><br><br>
    Ano de Lançamento: <input type="number" name="ano_lancamento" required><br><br>
    Temporadas: <input type="number" name="temporadas" required><br><br>
    <input type="submit" value="Salvar">
</form>
<br>
<a href="read.php">⬅ Voltar</a>