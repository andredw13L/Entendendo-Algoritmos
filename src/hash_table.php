<?php

// Em algoritmos, isso é uma Tabela Hash.
// O PHP chama de "Array Associativo".
$caderno = [];

// Inserção: Tempo de execução O(1)
// O PHP gerencia internamente a função hash e o endereçamento.
$caderno["maçã"] = 0.67;
$caderno["leite"] = 1.49;
$caderno["abacate"] = 1.49;

print_r($caderno);

/**
 * Busca: Tempo de execução O(1) (Tempo Constante)
 * Não importa o tamanho do array, o acesso à chave "abacate" 
 * não exige percorrer todos os itens (diferente de uma lista simples).
 */
printf("\n" . "Preço do abacate: " . $caderno["abacate"] . "\n");
