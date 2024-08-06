<!DOCTYPE html>
<html>
  <head>
    <!-- Material disponibilizado pelo professor Anderson Macedo -->
    <!-- Define a codificação de caracteres da página -->
    <meta charset="utf-8">
    <!-- Define o título da página -->
    <title>Produtos</title>
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
        <!-- Título da página, centralizado -->
        <h1 style="text-align: center">Programação Web II - Pedido de compra</h1>
        <!-- Link para o carrinho, abre em uma nova aba -->
        <a href="carrinho.php" target="_blank">Carrinho</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <!-- Inclui o arquivo PHP que contém a busca de produtos -->
          <?php require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>
  </body>
</html>
