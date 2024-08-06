<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Define a codificação de caracteres da página -->
    <meta charset="utf-8">
    <!-- Define a visualização para ser responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define o título da página -->
    <title>Cadastrar Marca</title>
    <!-- Inclui o arquivo de estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="center">
            <!-- Título da página -->
            <h1>Cadastro de Marcas</h1>
            <!-- Link para voltar à página inicial -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <!-- Formulário para cadastrar uma nova marca -->
        <form action="insere-marca.php" method="post">
            <!-- Rótulo e campo de texto para a descrição da marca -->
            <label for="">Descrição:</label>
            <input type="text" name="descricao">
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>

</html>
