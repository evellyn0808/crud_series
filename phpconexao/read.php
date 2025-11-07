<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM series"; // Consulta todas as séries
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ano de Lançamento</th>
                <th>Temporadas</th>
                <th>Ações</th>
            </tr>";

    while ($row = $result->fetch_assoc()) { // Para cada série
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["titulo"] . "</td>
                <td>" . $row["ano_lancamento"] . "</td>
                <td>" . $row["temporadas"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>"; 
    }

    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhuma série encontrada."; // Mensagem se não houver séries
}
?>