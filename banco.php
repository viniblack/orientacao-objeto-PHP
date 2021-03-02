<?php

require_once 'src/Model/Conta/Conta.php';
require_once 'src/Model/Endereco.php';
require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Conta/Titular.php';
require_once 'src/Model/CPF.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;

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
