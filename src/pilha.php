<?php

/**
 * Função principal que inicia a saudação.
 *
 * @param string $nome  Nome da pessoa a ser saudada.
 */
function saludar(string $nome): void {

    // Exibe uma saudação inicial
    echo "Olá, " . $nome . "!";

    // Chama outra função para continuar a conversa
    saludar2($nome);

    // Exibe mensagem antes de encerrar
    echo PHP_EOL . "Preparando para dizer tchau...";

    // Chama a função de despedida
    tchau();
}

/**
 * Segunda função de saudação, complementa a primeira.
 *
 * @param string $nome  Nome da pessoa a ser saudada.
 */
function saludar2(string $nome): void {

    // Exibe outra mensagem personalizada
    echo PHP_EOL . "Como vai " . $nome . "?";
}

/**
 * Função responsável por exibir a despedida.
 */
function tchau(): void {

    // Mostra a mensagem de tchau e quebra de linha no final
    echo PHP_EOL . "Ok, tchau!" . PHP_EOL;
}

// Chamada inicial do programa:
// Executa a função principal passando o nome "Maggie"
saludar("Maggie");
