<?php

// Em algoritmos, isso é uma Tabela Hash.
// O PHP chama de "Array Associativo".
$caderno = [];

// Aqui estamos "mapeando" strings para números (preços).

/*  A função hash do PHP pega a palavra "maçã" e a transforma em um 
    endereço de memória específico onde o valor 0.67 será guardado.
*/
$caderno["maçã"] = 0.67;
$caderno["leite"] = 1.49;
$caderno["abacate"] = 1.49;


print_r($caderno);

// A mágica da Tabela Hash: 
// Para encontrar o preço do abacate, o computador não precisa olhar a maçã nem o leite.
// Ele vai direto na "gaveta" do abacate. Isso é busca em tempo constante: O(1).
printf("\n" . "Preço do abacate: " . $caderno["abacate"] . "\n");
