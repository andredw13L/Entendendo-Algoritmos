<?php

/**
 * Ordena um array de inteiros usando o algoritmo QuickSort de forma recursiva.
 *
 * @param int[] $array  O array de números inteiros a ser ordenado.
 * @return int[]        O array ordenado em ordem crescente.
 */
function quicksort(array $array): array
{

    /* Caso base:
       Se o array tiver menos de dois elementos, ele já está ordenado.
       Isso encerra a recursão. */
    if (count($array) < 2) {
        return $array;
    }
    

    /* Define o primeiro elemento como pivô.
       O pivô é usado para dividir o array em duas partes:
       - elementos menores ou iguais ao pivô
       - elementos maiores que o pivô */
    $pivo = $array[0];


    /* Arrays auxiliares para armazenar os elementos de cada partição. */
    $menores = [];
    $maiores = [];


    /* Percorre o array a partir do segundo elemento.
       Isso evita comparar o pivô com ele mesmo. */
    for ($i = 1; $i < count($array); $i++) {


        /* Se o elemento for menor ou igual ao pivô, adiciona ao grupo dos menores. */
        if ($array[$i] <= $pivo) {
            $menores[] = $array[$i];
        }

        /* Se o elemento for maior que o pivô, adiciona ao grupo dos maiores. */
        if ($array[$i] > $pivo) {
            $maiores[] = $array[$i];
        }
    }


    /* Chamada recursiva:
       Ordena as duas partições de forma independente.
       Em seguida, combina os resultados:
       1. Elementos menores ordenados
       2. O pivô
       3. Elementos maiores ordenados
       O uso de array_merge concatena e reindexa os arrays resultantes. */
    return array_merge(quicksort($menores), [$pivo], quicksort($maiores));
}


/* Exemplo de uso */
print_r(quicksort([10, 5, 2, 3])); // Saída esperada: [2, 3, 5, 10]
