<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
  'João da Silva',
  new CPF('123.456.231-32'),
  10000
);

$autenticador->tentaLogin($umDiretor, '4321');
