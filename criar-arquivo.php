<?php

require __DIR__.'/vendor/autoload.php';

use \App\Files\CSV;

$dados = [
[
    'ID',
    'Nome',
    'Descrição',
],

[

    1,
    'Porduto teste',
    'Produto teste de integração',

],

[
    2,
    'Produto amostra',
    'Produto de amostra de integração',
],

[
    3,
    'Produto Miguel',
    'Produto especifico do Miguel'
 
]


];

$sucesso = CSV :: criarArquivo(__DIR__.'/files/arquivo-escrita.csv', $dados, ',');

var_dump($sucesso);
