<?php

function pesquisa_binaria($lista, $item) {
    
    $baixo = 0;
    $alto = count($lista) - 1;

    while ($baixo <= $alto) {
        $meio = (int)(($baixo + $alto) / 2);
        $chute = $lista[$meio];

        if ($chute == $item) {
            return $meio;
        }
        
        if ($chute > $item) {
            $alto = $meio - 1;

        } else {
            $baixo = $meio + 1;
        }
    }

    return "O item não existe!";
}

$minha_lista = [1, 3, 5, 7, 9];

printf(pesquisa_binaria($minha_lista, 3) . "\n");
printf(pesquisa_binaria($minha_lista, -1) . "\n");
