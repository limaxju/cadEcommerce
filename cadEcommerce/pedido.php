<!DOCTYPE html>
<html>
  <head>
    <!-- Define a versão do HTML -->
    <meta charset="utf-8">
    <!-- Define o título da página -->
    <title>Resumo de Pedido</title>
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
        <h1>Programação Web II - Resumo do Pedido</h1>
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <div>
            <!-- Inclui o arquivo PHP que contém o resumo dos produtos -->
            <?php require_once('controller/produtos-resumo.php'); ?>
          </div>
        </div>
    </section>
  </body>
</html>
