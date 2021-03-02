<?php

require_once 'autoload.php';

// Pode importar os arquivos dessa forma 
use Alura\Banco\Model\Conta\{Titular, Conta};
use Alura\Banco\Model\{Endereco, CPF};

// ou dessa forma

// use Alura\Banco\Model\Conta\Titular;
// use Alura\Banco\Model\Conta\Conta;
// use Alura\Banco\Model\Endereco;
// use Alura\Banco\Model\CPF;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123.567.123-59'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
