<?php

$nomeMinusculo = 'pedro antonio rodrigues';
$nomeMaiusculo = 'PEDRO ANTONIO RODRIGURES';

echo  strtoupper($nomeMinusculo) . PHP_EOL;

echo  strtolower($nomeMaiusculo) . PHP_EOL;

echo ucwords($nomeMinusculo) . PHP_EOL;

$frase = 'MARELO, VERDE, VERMELHO, PRETO, ROXO';
$plavrasSeparadas = explode(',' , $frase);
print_r ($plavrasSeparadas);

echo PHP_EOL; 
$fraseSeparadaPorEspaco = implode(' ----', $plavrasSeparadas);

echo $fraseSeparadaPorEspaco;
echo PHP_EOL;
$frase2 = 'joao esta reprovando na disciplina de desenvolvimento de aplicações '; 

$fraseCorrigida = str_replace('reprovando', 'sendo aprovado', $frase2);
echo $fraseCorrigida;