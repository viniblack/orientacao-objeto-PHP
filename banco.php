<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
