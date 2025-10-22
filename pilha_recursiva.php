<?php

/**
 * Calcula o fatorial de um número de forma recursiva.
 *
 * Exemplo:
 * fatorial(3) = 3 * 2 * 1 = 6
 *
 * @param int $x  O número inteiro positivo para calcular o fatorial.
 * @return int    O resultado do fatorial.
 */
function fatorial(int $x): int
{

    // Caso base: quando x chega a 1, a recursão termina
    if ($x === 1) {
        return 1;
    }
    // Caso recursivo: multiplica x pelo fatorial de (x - 1)
    else {
        return $x * fatorial($x - 1);
    }
}

// Chama a função e imprime o resultado de 3! = 6
printf(fatorial(3) . PHP_EOL);


// Dica: Utilizar o que chamamos de tail recursion (recursão de cauda)

