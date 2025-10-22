<?php

function saludar(string $nome): void {

    echo "Olá, " . $nome . "!";

    saludar2($nome);

    echo PHP_EOL . "Preparando para dizer tchau...";

    tchau();
}

function saludar2(string $nome): void {

    echo PHP_EOL . "Como vai " . $nome . "?";
}

function tchau() {

    echo PHP_EOL . "Ok, tchau!" . PHP_EOL;
}

saludar("Maggie");