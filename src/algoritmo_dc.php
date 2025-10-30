<?php

/**
 * Função para somar todos os números de um array e retornar o total.
 *
 * @param array $lista  Array contendo os números a serem somados.
 * @return int A soma de todos os valores do array.
 */
function soma(array $lista): int {
    
    // Inicializa a variável que armazenará o total da soma
    $total = 0;

    // Percorre cada elemento do array
    foreach ($lista as $valor) {
        $total += $valor; // Adiciona o valor atual ao total
    }

    // Retorna a soma final
    return $total;
}

// Exemplo de uso: soma os números 1, 2, 3 e 4
printf(soma([1, 2, 3, 4]) . PHP_EOL); // saída: 10
