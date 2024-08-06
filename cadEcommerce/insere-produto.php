<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('controller/conexao.php');

// Obtém os dados enviados pelo formulário
$categoria    = $_POST['seleciona_categoria'];
$marca        = $_POST['seleciona_marca'];
$nome_produto = $_POST['nome'];
$descricao    = $_POST['descricao'];
$estoque      = $_POST['estoque'];
$preco        = $_POST['preco'];

// Cria a consulta SQL para inserir um novo produto no banco de dados
$grava_produto = "INSERT INTO produtos(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria', '$marca', '$nome_produto', '$descricao', '$estoque', '$preco')";

// Executa a consulta SQL
$result_gravacao = mysqli_query($mysqli, $grava_produto);

// Verifica se a inserção foi bem-sucedida
if(mysqli_affected_rows($mysqli) != 0){
    // Redireciona para a página produtos.php e exibe uma mensagem de sucesso
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
        <script type=\"text/javascript\">
            alert('Produto cadastrado com sucesso');
        </script>
    ";
} else {
    // Redireciona para a página produtos.php e exibe uma mensagem de erro
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
        <script type=\"text/javascript\">
            alert('Erro no cadastro, tente novamente');
        </script>
    ";
}
?>
