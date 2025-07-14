<?php
// Erro de verificação de campo vazio
$usuario = $_POST['usuario'] ?? '';

if ($usuario = '') {
  echo "Por favor, preencha o nome de usuário.";
} else {
  echo "Usuário informado: $usuario";
}






// Resolução: 
$usuario = $_POST['usuario'] ?? '';

if ($usuario === '') {
  echo "Por favor, preencha o nome de usuário.";
} else {
  echo "Usuário informado: $usuario";
}
// Na estrutura condiciona if/else, foi identificado que o sinal de atribuição estava errado. 
// O sinal de atribuição " = " foi corrigido para o sinal de semelhante " === "
