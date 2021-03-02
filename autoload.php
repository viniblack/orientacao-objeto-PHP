<?php

// Essa function esta fazendo o require_once de todos os arquivos
spl_autoload_register(function (string $nomeCompletoDaClasse) {

  // Ele transforma Alura\Banco\Model\{NOME DO ARQUIVO}
  // Em src/Model/{NOME DO ARQUIVO}.php
  $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
  $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
  $caminhoArquivo .= '.php';

  if (file_exists($caminhoArquivo)) {
    require_once $caminhoArquivo;
  }
});
