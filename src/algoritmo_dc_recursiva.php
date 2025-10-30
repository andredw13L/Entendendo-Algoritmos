<?php

/**
 * Conta o número de itens em um array de forma recursiva usando tail recursion.
 *
 * @param array $lista      A lista de elementos a ser contada.
 * @param int   $contador   Acumulador que guarda a contagem parcial.
 * @return int              O número total de itens no array.
 */
function contar(array $lista, int $contador = 0): int {

    // Caso base: se o array estiver vazio, retorna o acumulador.
    // Isso encerra a recursão.
    if (empty($lista)) {
        return $contador;
    }

    // Remove o último elemento do array.
    // A lista fica menor a cada chamada recursiva.
    array_pop($lista);

    // Chamada recursiva de cauda:
    // Nenhuma operação é feita após o retorno da função — o retorno é direto.
    // Isso caracteriza uma "tail recursion".
    return contar($lista, $contador + 1);
}

// Exemplo de uso:
print_r(contar([1, 2, 3, 4, 5, 6, 7]) . PHP_EOL); // Saída esperada: 7
