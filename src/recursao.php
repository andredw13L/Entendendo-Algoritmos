<?php

/**
 * Classe representando uma caixa que pode conter outros itens (inclusive outras caixas).
 */
class Caixa {
    public array $itens;

    public function __construct(array $itens = []) {
        $this->itens = $itens;
    }

    /**
     * Verifica se o item é uma caixa.
     *
     * @param mixed $item
     * @return bool
     */
    public function eUmaCaixa(mixed $item): bool {
        return $item instanceof Caixa;
    }
}

/**
 * Função recursiva que procura por uma chave dentro de caixas aninhadas.
 *
 * @param Caixa $caixa A caixa onde começa a busca.
 * @return void
 */
function procurePelaChaveRecursiva(Caixa $caixa): void {
    foreach ($caixa->itens as $item) {
        if ($caixa->eUmaCaixa($item)) {
            // Se o item for uma caixa, chama a função recursivamente
            procurePelaChaveRecursiva($item);
        } elseif ($item === 'chave') {
            // Se o item for a chave, exibe a mensagem
            echo "Achei a chave!\n";
        
            return; // encerra a busca ao encontrar
        }
    }
}

// Exemplo de uso:

$caixaInterna = new Caixa(['meia', 'chave']);
$caixaMedia = new Caixa(['livro', $caixaInterna]);
$caixaPrincipal = new Caixa(['caneta', $caixaMedia]);

procurePelaChaveRecursiva($caixaPrincipal);
