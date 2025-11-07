<?php
// Configurações para conectar ao banco de dados
$servername = "localhost"; // Endereço do servidor
$username = "root";         // Usuário padrão
$password = "Senai@118";    // Senha padrão
$dbname = "teste_formulario"; // Nome do banco de dados de séries

// Conecta ao MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão falhou
if ($conn->connect_error) {
    echo "Erro de conexão: " . $conn->connect_error; // Exibe mensagem de erro
} else {
    echo "Conexão bem-sucedida!";
}

?>
