<?php

/**
 * Realiza uma pesquisa binária em uma lista ordenada.
 *
 * A pesquisa binária divide o array ao meio repetidamente
 * até encontrar o item desejado (ou concluir que ele não existe).
 *
 * @param array $lista   Lista **ordenada** onde a busca será feita.
 * @param int|float $item  Valor a ser encontrado.
 * @return int|string     Retorna o índice do item se encontrado,
 *                        ou uma mensagem informando que não existe.
 */
function pesquisa_binaria(array $lista, int|float $item): int|string {
    
    // Limites inferior e superior da busca
    $baixo = 0;
    $alto = count($lista) - 1;

    // Enquanto ainda houver um intervalo válido
    while ($baixo <= $alto) {

        // Calcula o índice do meio (divisão inteira)
        $meio = (int)(($baixo + $alto) / 2);
        $chute = $lista[$meio];

        // Caso o item tenha sido encontrado
        if ($chute == $item) {
            return $meio;
        }

        // Se o chute for muito alto, busca na metade inferior
        if ($chute > $item) {
            $alto = $meio - 1;

        // Caso contrário, busca na metade superior
        } else {
            $baixo = $meio + 1;
        }
    }

    // Item não encontrado
    return "O item não existe!";
}

// Exemplo de uso
$minha_lista = [1, 3, 5, 7, 9];

// Deve retornar o índice 1 (posição do número 3)
printf(pesquisa_binaria($minha_lista, 3) . "\n");

// Deve retornar "O item não existe!"
printf(pesquisa_binaria($minha_lista, -1) . "\n");
