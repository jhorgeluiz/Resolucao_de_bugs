<?php

// 🐞 Situação original

$pdo = new PDO("mysql:host=localhost;dbname=erp", "root", "");
$stmt = $pdo->prepare("INSERT INTO tb_vendas (cliente_id, valor_total) VALUES (?, ?)");
$stmt->execute([999, 150.00]);  // cliente_id 999 não existe

// ✅ Qual é o erro?
// A tabela tb_vendas tem uma chave estrangeira cliente_id que referencia a tabela tb_clientes.

// O valor 999 não existe na tabela de clientes.

// Isso causa o erro:
// 🔴 SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails






// ✅Resolução:
$cliente_id = 999;

$stmt = $pdo->prepare("SELECT id from tb_clientes where id = ?");
$stmt->execute([$cliente_id]);

$pdo = new PDO("mysql:host=localhost;dbname=erp", "root", "");
$stmt = $pdo->prepare("INSERT INTO tb_vendas (cliente_id, valor_total) where cliente_id = id VALUES (?, ?)");
$stmt->execute([999, 150.00]);  // cliente_id 999 não existe

