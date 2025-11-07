<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID da série foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "DELETE FROM series WHERE id=$id"; // Prepara a exclusão

    if ($conn->query($sql) === TRUE) {
        header("Location: index2.php"); // Redireciona se a exclusão for bem-sucedida
    } else {
        echo "Erro:" . $conn->error; // Mostra erro, se houver
    }
}
?>