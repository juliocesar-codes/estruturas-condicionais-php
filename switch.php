<?php
include 'includes/header.php';

$linguagem = $_POST['linguagens'];

echo '<a href="index.php"><button>Voltar</button></a>';

/*switch(valor){
    caso "valor 1":
        trecho de código a executar;
        break;
    caso "valor 2":
        trecho de código a executar;
        break;
    default:
        trecho de código para executar por padrão, caso os valores não sejam encontrados;
        break;
}*/

switch ($linguagem) {
    case 'html':
        echo "<p><strong>HTML: </strong>Uma linguagem de marcação usada para criar a estrutura de páginas web, com elementos como títulos, parágrafos, links, imagens e listas organizadas em um layout visual.</p>";
        echo '<div class="img"><img src="assets/html.png" alt=""></div>';
        break;
    case 'css':
        echo "<p><strong>CSS: </strong>Uma linguagem de estilo usada para definir a apresentação visual de uma página web, controlando cores, fontes, espaçamentos, alinhamentos e outros aspectos de design.</p>";
        echo '<div class="img"><img src="assets/css.png" alt=""></div>';
        break;
    case 'js':
        echo "<p><strong>JS: </strong>Uma linguagem de programação usada para adicionar interatividade a páginas web, permitindo manipular elementos, criar animações, validar formulários e interagir com servidores.</p>";
        echo '<div class="img"><img src="assets/js.png" alt=""></div>';
        break;
    case 'php':
        echo "<p><strong>PHP: </strong>Uma linguagem de script usada no desenvolvimento web para processar dados no servidor, gerar conteúdo dinâmico, manipular bancos de dados e controlar sessões de usuário.</p>";
        echo '<div class="img"><img src="assets/php.png" alt=""></div>';
        break;
    case 'sql':
        echo "<p><strong>SQL: </strong>Uma linguagem usada para gerenciar e manipular bancos de dados, permitindo consultas, inserção de dados, atualização, exclusão e criação de tabelas de forma estruturada.</p>";
        echo '<div class="img"><img src="assets/sql.png" alt=""></div>';
        break;
    case 'laravel':
        echo "<p><strong>Laravel: </strong>Um framework PHP usado para o desenvolvimento web, que oferece uma estrutura elegante e ferramentas para autenticação, roteamento, controle de banco de dados e gerenciamento de APIs.</p>";
        echo '<div class="img"><img src="assets/laravel.webp" alt=""></div>';
        break;
    default:
        echo "<p>Parece que {$linguagem} não é uma linguagem!</p>";
        break;
}

include 'includes/footer.php';