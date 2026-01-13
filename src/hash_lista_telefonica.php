<?php

// Criando a Tabela Hash (Array Associativo em PHP)
$lista_telefonica = [];

// Adicionando entradas (Mapeamento de Nome -> Telefone)
// O PHP gera um "hash" da string "jenny" para saber exatamente onde salvar o número.
$lista_telefonica["jenny"] = 8675309;
$lista_telefonica["emergency"] = 911;

// A busca é instantânea: Tempo O(1)
// O computador não lê a lista inteira, ele calcula o endereço da chave "jenny" e acessa o valor.
printf($lista_telefonica["jenny"] . "\n");
