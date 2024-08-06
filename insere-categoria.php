<?php
// Inclui o arquivo de conexão com o banco de dados
include('controller/conexao.php');

// Obtém a descrição da categoria enviada pelo formulário
$descricao = $_POST['descricao'];

// Exibe a descrição da categoria recebida
echo "<h3>Descrição: $descricao </h3></br>";

// Cria a consulta SQL para inserir uma nova categoria no banco de dados
$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

// Executa a consulta SQL e verifica se a inserção foi bem-sucedida
if(mysqli_query($mysqli, $cad_categoria)){
    // Se a inserção foi bem-sucedida, exibe uma mensagem de sucesso
    echo "<h1>Nova categoria cadastrada com sucesso</h1></br>";
} else {
    // Se houve um erro na inserção, exibe uma mensagem de erro com detalhes
    echo "Erro: " . $cad_categoria . "</br>". mysqli_error($mysqli);
}

// Fecha a conexão com o banco de dados
mysqli_close($mysqli);
?>
