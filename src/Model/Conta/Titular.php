<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa
{

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::___construct($nome, $cpf);
        $this->endereco = $endereco;
    }



    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
