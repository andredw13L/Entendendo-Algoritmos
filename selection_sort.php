<?php

/**
 * Encontra o índice do menor elemento dentro de um array.
 *
 * @param array $array  O array onde será feita a busca.
 * @return int          O índice do menor elemento encontrado.
 */
function buscaMenor(array $array): int {

    // Assume que o primeiro elemento é o menor inicialmente
    $menor = $array[0];
    $menor_indice = 0;

    // Percorre o array para encontrar o menor valor
    for ($i = 0; $i < count($array); $i++) { 
        // Se o elemento atual for menor que o "menor" anterior...
        if ($array[$i] < $menor) {
            // Atualiza o menor valor e seu índice
            $menor = $array[$i];
            $menor_indice = $i; 
        }
    }

    // Retorna o índice do menor elemento encontrado
    return $menor_indice;
}

/**
 * Ordena um array usando o algoritmo de ordenação por seleção.
 *
 * A cada iteração, busca o menor elemento do array original,
 * adiciona-o a um novo array e o remove do original.
 *
 * @param array $array  O array a ser ordenado.
 * @return array        O novo array, contendo os elementos em ordem crescente.
 */
function ordenacaoPorSelecao(array $array): array {

    $novoArray = [];

    // Enquanto ainda houver elementos no array original
    while (count($array) > 0) { 
        // Encontra o índice do menor elemento
        $menor = buscaMenor($array);

        // Adiciona o menor elemento ao novo array
        array_push($novoArray, $array[$menor]);

        // Remove o menor elemento do array original
        array_splice($array, $menor, 1);
    }

    // Retorna o novo array já ordenado
    return $novoArray;
}

// Exemplo de uso:
print_r(ordenacaoPorSelecao([5, 3, 6, 2, 10]));
