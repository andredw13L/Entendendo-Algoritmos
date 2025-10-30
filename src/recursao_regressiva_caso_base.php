<?php

function regressivaRecursiva(int $i): void {
    
    // Parada da recursão
    if($i < 0){
        return;
    }

    echo $i . "\n";

    // Chamada recursiva, decrementando
    regressivaRecursiva($i - 1);
}

// Exemplo de uso:
regressivaRecursiva(5);

