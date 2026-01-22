<?php
// No livro, isso é chamado de Tabela Hash para representar o grafo.
$grafo = [];

// "Andre" é o nó inicial. 
// A lista ["Alice", "Bob", "Claire"] são os seus vizinhos de primeiro grau.
$grafo["Andre"] = ["Alice", "Bob", "Claire"];

// Vizinhos de segundo grau de Andre (através de Bob)
$grafo["Bob"] = ["Anuj", "Peggy"];

$grafo["Alice"] = ["Peggy"];
$grafo["Claire"] = ["Thom", "Jonny"];

// Nós folha ou finais: pessoas que não têm conexões saindo delas.
// Importante para o algoritmo não entrar em loop infinito.
$grafo["Anuj"] = [];
$grafo["Peggy"] = [];
$grafo["Thom"] = [];
$grafo["Jonny"] = [];

// Exibe a estrutura completa do mapa de conexões
print_r($grafo);
