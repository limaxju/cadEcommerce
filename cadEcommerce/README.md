# Projeto: Carrinho de Compras

Aplicação web para gerenciar um carrinho de compras. Utiliza HTML, CSS, JavaScript e PHP.

## Estrutura

- **HTML**: Define o layout da página.
- **CSS**: Aplica estilos à página.
- **JavaScript**: Adiciona funcionalidades interativas.
- **PHP**: Backend que gerencia produtos e o carrinho.

## Arquivos

1. `index.php`: Página principal do carrinho de compras.
   - **Comentário**: Este arquivo é a entrada principal da aplicação, responsável por exibir os produtos e o carrinho.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém todos os estilos CSS aplicados à página, garantindo uma apresentação visual consistente.
3. `js/jquery-2.1.4.min.js`: Biblioteca jQuery.
   - **Comentário**: Facilita a manipulação do DOM e eventos na página.
4. `js/script.js`: Scripts personalizados.
   - **Comentário**: Contém as funcionalidades interativas, como adicionar ou remover produtos do carrinho.
5. `controller/carrinho-busca.php`: Script para buscar produtos.
   - **Comentário**: Realiza a busca de produtos no backend e retorna os resultados para serem exibidos no frontend.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php` através do navegador.

---

# Projeto: Cadastro de Categorias

Aplicação web para cadastrar categorias. Utiliza HTML, CSS e PHP.

## Estrutura

- **HTML**: Define o layout do formulário.
- **CSS**: Aplica estilos à página.
- **PHP**: Processa o cadastro das categorias.

## Arquivos

1. `index.php`: Página principal com o formulário de cadastro.
   - **Comentário**: Formulário para entrada de novas categorias.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém estilos CSS para o formulário.
3. `insere-categoria.php`: Script para inserir categorias.
   - **Comentário**: Processa os dados do formulário e insere uma nova categoria no banco de dados.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php` através do navegador.

---

# Projeto: Pedido de Compra

Aplicação web para gerenciar pedidos de compra. Utiliza HTML, CSS, JavaScript e PHP.

## Estrutura

- **HTML**: Define o layout da página.
- **CSS**: Aplica estilos à página.
- **JavaScript**: Adiciona funcionalidades interativas.
- **PHP**: Backend que gerencia produtos e o carrinho.

## Arquivos

1. `index.php`: Página principal de produtos.
   - **Comentário**: Exibe a lista de produtos disponíveis para compra.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém estilos CSS para a página de produtos.
3. `js/jquery-2.1.4.min.js`: Biblioteca jQuery.
   - **Comentário**: Facilita a manipulação do DOM e eventos na página.
4. `js/script.js`: Scripts personalizados.
   - **Comentário**: Contém as funcionalidades interativas, como adicionar produtos ao carrinho.
5. `controller/produtos-busca.php`: Script para buscar produtos.
   - **Comentário**: Realiza a busca de produtos no backend e retorna os resultados para serem exibidos no frontend.
6. `carrinho.php`: Página do carrinho de compras.
   - **Comentário**: Exibe os produtos adicionados ao carrinho e permite a finalização do pedido.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php` através do navegador.

---

# Projeto: Cadastro de Marcas

Aplicação web para cadastrar marcas. Utiliza HTML, CSS e PHP.

## Estrutura

- **HTML**: Define o layout do formulário.
- **CSS**: Aplica estilos à página.
- **PHP**: Processa o cadastro das marcas.

## Arquivos

1. `index.php`: Página principal com o formulário de cadastro.
   - **Comentário**: Formulário para entrada de novas marcas.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém estilos CSS para o formulário.
3. `insere-marca.php`: Script para inserir marcas.
   - **Comentário**: Processa os dados do formulário e insere uma nova marca no banco de dados.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php` através do navegador.

---

# Projeto: Resumo de Pedido

Aplicação web para mostrar o resumo de um pedido. Utiliza HTML, CSS, JavaScript e PHP.

## Estrutura

- **HTML**: Define o layout da página.
- **CSS**: Aplica estilos à página.
- **JavaScript**: Adiciona funcionalidades interativas.
- **PHP**: Backend que gera o resumo do pedido.

## Arquivos

1. `index.php`: Página principal do resumo do pedido.
   - **Comentário**: Exibe o resumo dos produtos selecionados para compra.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém estilos CSS para a página de resumo.
3. `js/jquery-2.1.4.min.js`: Biblioteca jQuery.
   - **Comentário**: Facilita a manipulação do DOM e eventos na página.
4. `js/script.js`: Scripts personalizados.
   - **Comentário**: Contém as funcionalidades interativas para exibir e atualizar o resumo do pedido.
5. `controller/produtos-resumo.php`: Script para gerar o resumo do pedido.
   - **Comentário**: Realiza o processamento dos dados do pedido e retorna o resumo para ser exibido no frontend.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php` através do navegador.

---

# Projeto: Cadastro de Produtos

Aplicação web para cadastrar produtos com seleção de categoria e marca. Utiliza HTML e PHP.

## Estrutura

- **PHP**: Gerencia a conexão e inserção de dados no banco de dados.
- **HTML**: Define o layout do formulário de cadastro.
- **CSS**: Aplica estilos à página.

## Arquivos

1. `index.php`: Página principal com o formulário de cadastro.
   - **Comentário**: Formulário para entrada de novos produtos, permitindo a seleção de categoria e marca.
2. `css/style.css`: Arquivo de estilos.
   - **Comentário**: Contém estilos CSS para o formulário.
3. `insere-produto.php`: Script para inserir produtos.
   - **Comentário**: Processa os dados do formulário e insere um novo produto no banco de dados.
4. `controller/conexao.php`: Script de conexão com o banco de dados.
   - **Comentário**: Estabelece a conexão com o banco de dados MySQL.

## Execução

1. Clone o repositório.
2. Utilize um servidor web com suporte a PHP e MySQL.
3. Coloque os arquivos no servidor e configure o banco de dados.
4. Acesse `index.php` através do navegador.

## Imagens do trabalho
! [Estrutura da página](img.png)