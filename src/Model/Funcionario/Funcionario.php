<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa
{

  private string $cargo;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {
    parent::___construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function Cargo(): string
  {
    return $this->cargo;
  }

  public function alteraNome(string $nome): void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento <= 0) {
      echo "Aumento deve ser maior que zero";
      return;
    }
    $this->salario += $valorAumento;
  }

  public function recuperaSalario(): float
  {
    return $this->salario;
  }

  abstract public function calculaBonificacao(): float;
}
