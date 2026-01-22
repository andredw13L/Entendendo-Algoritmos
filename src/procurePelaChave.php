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

    /**
     * Cria uma pilha inicial com esta caixa principal.
     *
     * @return array
     */
    public function crieUmaPilhaParaBusca(): array {
        return [$this]; // começa com a caixa principal
    }
}

/**
 * Simula a busca por uma chave dentro de várias caixas aninhadas,
 * utilizando uma pilha (busca em profundidade).
 *
 * @param Caixa $caixaPrincipal  A caixa inicial onde começa a busca.
 * @return void
 */
function procurePelaChave(Caixa $caixaPrincipal): void {
    // Cria a pilha de busca e adiciona a caixa principal
    $pilha = $caixaPrincipal->crieUmaPilhaParaBusca();

    // Enquanto houver caixas na pilha
    while (!empty($pilha)) {

        // Pega a última caixa da pilha (LIFO)
        /** @var Caixa $caixa */
        $caixa = array_pop($pilha);

        // Percorre todos os itens dentro da caixa
        foreach ($caixa->itens as $item) {

            if ($caixa->eUmaCaixa($item)) {
                // Se for uma caixa, adiciona à pilha para explorar depois
                array_push($pilha, $item);
            } elseif ($item === 'chave') {
                // Se for a chave, exibe a mensagem
                echo "Achei a chave!\n";
                return;
            }
        }
    }

    echo "Nenhuma chave encontrada.\n";
}

// Exemplo de uso:

$caixaInterna = new Caixa(['meia', 'chave']);
$caixaMedia = new Caixa(['livro', $caixaInterna]);
$caixaPrincipal = new Caixa(['caneta', $caixaMedia]);

procurePelaChave($caixaPrincipal);
