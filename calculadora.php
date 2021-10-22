<?php
 
 echo '---------- CALCULADORA PHP ---------------' . PHP_EOL;
$numero1 = readline ('Digite o primeiro número: ');
$numero2 = readline ('Digite o segundo numero número: ');
// Comandos : echo print_r() e var_dump()
print_r($numero1, $numero2); // escreve na tela qualquer tipo de variavel
var_dump($numero1, $numero2); // consegue fazer o dump => mostrar valor da variavel 

echo PHP_EOL . 'RESULTADO: ' . PHP_EOL;
echo 'Adição: ' . $numero1 + $numero2 . PHP_EOL;
echo 'Subtração: '. $numero1 - $numero2 . PHP_EOL;
echo 'Multiplicação: ' . $numero1 * $numero2 . PHP_EOL;
echo 'Divisão simples: ' . $numero1 / $numero2 . PHP_EOL;
echo 'Resto da divisão: ' . $numero1 % $numero2 . PHP_EOL;




