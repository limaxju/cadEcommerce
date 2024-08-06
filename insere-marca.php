<?php
// Inclui o arquivo de conexão com o banco de dados
include('controller/conexao.php');

// Obtém a descrição da marca enviada pelo formulário
$descricao = $_POST['descricao'];

// Exibe a descrição da marca recebida
echo "<h3>Descrição: $descricao </h3></br>";

// Cria a consulta SQL para inserir uma nova marca no banco de dados
$cad_marca = "INSERT INTO marca(DESCRICAO) VALUES ('$descricao')";

// Executa a consulta SQL e verifica se a inserção foi bem-sucedida
if(mysqli_query($mysqli, $cad_marca)){
    // Se a inserção foi bem-sucedida, exibe uma mensagem de sucesso
    echo "<h1>Marca cadastrada com sucesso</h1></br>";
} else {
    // Se houve um erro na inserção, exibe uma mensagem de erro com detalhes
    echo "Erro: " . $cad_marca . "</br>". mysqli_error($mysqli);
}

// Fecha a conexão com o banco de dados
mysqli_close($mysqli);
?>
