<?php

function regressivaRecursiva(int $i): void {
    echo $i . "\n";

    // Chamada recursiva, decrementando
    regressivaRecursiva($i - 1);
}

// Exemplo de uso:
regressivaRecursiva(5);

