<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\{Autenticavel, Pessoa, Endereco, CPF};

class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abdc';
    }
}
