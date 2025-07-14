<?php
$usuario = $_POST['usuario'] ?? '';

if ($usuario === '') {
  echo "Por favor, preencha o nome de usuário.";
} else {
  echo "Usuário informado: $usuario";
}
