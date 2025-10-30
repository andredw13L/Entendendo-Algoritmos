<?php

/**
 * Função para encontrar o maior número de um array usando programação funcional.
 *
 * @param array $lista O array de números a ser analisado.
 * @return int         O maior valor presente no array.
 */
function maior(array $lista): int
{

    // array_reduce percorre o array e reduz todos os elementos a um único valor.
    // $contador é o acumulador que guarda o maior valor encontrado até agora.
    // $valorAtual é o elemento atual do array sendo processado.
    return array_reduce(
        $lista,
        function ($contador, $valorAtual) {

            // Compara o valor atual com o acumulador ($contador)
            // Retorna o maior dos dois para ser usado na próxima iteração
            return ($valorAtual > $contador) ? $valorAtual : $contador;

            // Inicializa o acumulador com o menor inteiro possível.
            // Isso garante que qualquer valor do array será maior inicialmente.
        },
        PHP_INT_MIN
    );
}

// Teste da função
printf(maior([1, 2, 3, 4, 5, 6, 7, 8]) . PHP_EOL); // saída: 8
