<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulariobd";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Inserir dados no banco de dados
$sql = "INSERT INTO formulario (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Processamento de Formulário</title>
</head>
<body>
    <h2>Dados processados com sucesso!</h2>
    
    <!-- Adicionar um botão de voltar -->
    <button onclick="voltarPaginaInicial()">Voltar para a página inicial</button>

    <!-- Adicionar script JavaScript para controlar a ação de voltar -->
    <script>
        function voltarPaginaInicial() {
            window.location.href="http://localhost/pi2/has/public/";
        }
    </script>
</body>
</html>




