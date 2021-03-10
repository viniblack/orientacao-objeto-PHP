<?php

require_once 'autoload.php';

use Alura\Banco\Model\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Model\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
  'Vinicius',
  new CPF('123.567.874-43'),
  1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
  'Patricia',
  new CPF('567.123.934-87'),
  3000
);

$umDiretor = new Diretor(
  'Ana Paula',
  new CPF('765.234.752-33'),
  5000
);

$umEditor = new EditorVideo(
  'Paulo',
  new CPF('756.345.789-52'),
  3500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
