<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Define a codificação de caracteres da página -->
    <meta charset="utf-8">
    <!-- Define a visualização para ser responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define o título da página -->
    <title>Produtos</title>
    <!-- Inclui o arquivo de estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="center">
            <h1> Cadastro de Produtos </h1>
            <!-- Link para voltar à página inicial -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <!-- Formulário para cadastrar produtos -->
        <form action="insere-produto.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Descrição: <input type="text" name="descricao"><br>
            Estoque: <input type="number" name="estoque"><br>
            Preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01"><br>
            Categoria:
            <select name="seleciona_categoria" id="">
                <option value="">Selecione</option>
                <?php
                // Consulta para selecionar todas as categorias do banco de dados
                $resultado_categoria = "SELECT * FROM categoria";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                // Loop para exibir cada categoria como uma opção no dropdown
                while ($row_categories = mysqli_fetch_assoc($resultcategoria)) {
                ?>
                    <option value="<?php echo $row_categories['IDCATEGORIA']; ?>">
                        <?php echo $row_categories['DESCRICAO']; ?>
                    </option>
                <?php
                }
                ?>
            </select><br>
            Marca:
            <select name="seleciona_marca" id="">
                <option value="">Selecione</option>
                <?php
                // Consulta para selecionar todas as marcas do banco de dados
                $resultado_marca = "SELECT * FROM marca";
                $resultmarca = mysqli_query($mysqli, $resultado_marca);
                // Loop para exibir cada marca como uma opção no dropdown
                while ($row_marca = mysqli_fetch_assoc($resultmarca)) {
                ?>
                    <option value="<?php echo $row_marca['IDMARCA']; ?>">
                        <?php echo $row_marca['DESCRICAO']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <br><br>
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>

</html>
