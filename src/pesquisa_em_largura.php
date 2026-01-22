<?php

// Usa a extensão nativa se existir, ou o Polyfill como backup.
require_once __DIR__ . '../../vendor/autoload.php';

use Ds\Deque;
use Ds\Set;

// O grafo mapeia os vizinhos (Lista de Adjacência)
$grafo = [];
$grafo["Andre"] = ["Alice", "Bob", "Claire"];
$grafo["Bob"] = ["Anuj", "Peggy"];
$grafo["Alice"] = ["Peggy"];
$grafo["Claire"] = ["Thom", "Jonny"];
$grafo["Anuj"] = [];
$grafo["Peggy"] = [];
$grafo["Thom"] = [];
$grafo["Jonny"] = [];

// No livro, quem tem o nome terminado em 'm' é o vendedor
function pessoaEVendedor(string $nome): bool {
    return str_ends_with($nome, 'm');
}


function pesquisa(string $nome_inicial, array $grafo): bool {

    // Cria uma fila de pesquisa (Double-ended queue)
    $fila_de_pesquisa = new Deque();

    // Adiciona os vizinhos iniciais à fila
    $fila_de_pesquisa->push(... $grafo[$nome_inicial]);

    // Lista para rastrear quem já foi verificado e evitar loops
    $verificadas = new Set();

    while (!$fila_de_pesquisa->isEmpty()) {

        // Tira a primeira pessoa da fila
        $pessoa = $fila_de_pesquisa->shift();

        // Só verifica a pessoa se ela ainda não foi analisada
        if(pessoaEVendedor($pessoa)) {
            echo "$pessoa é um vendedor de manga!" . PHP_EOL;
            return true;
        } else {
            // Não é vendedor? Adiciona os amigos dele na fila
            $fila_de_pesquisa->push(...$grafo[$pessoa]);
            // Marca como verificada
            $verificadas->add($pessoa);
        }
    }

    echo "Nenhum vendedor de manga encontrado." . PHP_EOL;
    return false;
}

// Nó inicial
pesquisa("Andre", $grafo);
