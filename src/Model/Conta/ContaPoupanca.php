<?php

namespace Alura\Banco\Model\Conta;

class ContaPoupanca extends Conta
{

  protected function percentualTarifa(): float
  {
    return .03;
  }
}
