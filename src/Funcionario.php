<?php

class Funcionario extends Pessoa
{

  private string $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo)
  {
    parent::___construct($nome, $cpf);
    $this->cargo = $cargo;
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
}
