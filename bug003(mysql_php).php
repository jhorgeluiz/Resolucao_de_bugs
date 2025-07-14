<?php
// ✅ Qual é o erro?
// A tabela tb_vendas tem uma chave estrangeira cliente_id que referencia a tabela tb_clientes.

// O valor 999 não existe na tabela de clientes.

// Isso causa o erro:
// 🔴 SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails
// 🐞 Situação original

$pdo = new PDO("mysql:host=localhost;dbname=erp", "root", "");
$stmt = $pdo->prepare("INSERT INTO tb_vendas (cliente_id, valor_total) VALUES (?, ?)");
$stmt->execute([999, 150.00]);  // cliente_id 999 não existe




// ✅Resolução:
$cliente_id = 999;

// Verifica se o cliente existe
$stmt = $pdo->prepare("SELECT id FROM tb_clientes WHERE id = ?");
$stmt->execute([$cliente_id]);

if ($stmt->rowCount() > 0) {
    $stmtInsert = $pdo->prepare("INSERT INTO tb_vendas (cliente_id, valor_total) VALUES (?, ?)");
    $stmtInsert->execute([$cliente_id, 150.00]);
    echo "Venda registrada com sucesso.";
} else {
    echo "Erro: Cliente não encontrado.";
}


// Defini o valor do cliente_id, depois fiz uma consulta na tabela tb_clientes para verificar qual era o id do cliente 
// e relaciona-lo a sua respectiva venda na tabela tb_venda.
// inseri uma estrutura condicional para verificar em qual linhas está o id verdadeiro

