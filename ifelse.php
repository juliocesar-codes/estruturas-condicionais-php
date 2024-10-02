<?php
include 'includes/header.php';

echo "<h2>Exemplo de utilização de IF / ELSE</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$numero = $_POST['numero'];
//if(condição){
//      trecho de código para executar, caso a condição seja atendida.
//}else{
//      trecho de código para executar, caso nenhuma condição seja atendida.
//}
if ($numero % 2 == 0) {
    echo "O numero {$numero} é par!";
} else if ($numero % 2 == !0) {
    echo "O numero {$numero} é impar!";
} else {
    echo "deu pau";
}
include 'includes/footer.php';
