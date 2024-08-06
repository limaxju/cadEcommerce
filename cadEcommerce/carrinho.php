<!DOCTYPE html>
<html>
  <head>
    <!-- Define a codificação de caracteres da página -->
    <meta charset="utf-8">
    <!-- Define o título da página -->
    <title>Carrinho</title>
    <!-- Inclui o arquivo de estilos CSS -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- Inclui a biblioteca jQuery -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Inclui o arquivo de scripts JavaScript -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <!-- Título da página -->
        <h1>Programação Web II - Carrinho</h1>
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <!-- Inclui o arquivo PHP que contém a busca de itens do carrinho -->
          <?php require_once('controller/carrinho-busca.php'); ?>
        </div>
    </section>
  </body>
</html>
