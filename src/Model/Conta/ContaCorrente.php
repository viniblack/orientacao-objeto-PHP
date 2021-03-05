<?php

namespace Alura\Banco\Model\Conta;

class contaCorrente extends Conta
{
  protected function percentualTarifa(): float
  {
    return .05;
  }

  public function transfere(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }

    $this->saca($valorATransferir);
    $contaDestino->deposita($valorATransferir);
  }
}
