❓Problema: O desconto está sempre sendo aplicado, mesmo quando o cliente não é "premium".


function calcularDesconto(preco, tipoCliente) {
  if (tipoCliente == "premium") {
    return preco * 0.8; // 20% de desconto
  } else {
    return preco;
  }
}

console.log("Cliente comum;",calcularDesconto(100, "comum"));  // Esperado: 100
console.log("Cliente premium:",calcularDesconto(100, "premium")); // Esperado: 80



Resolução: 
Na estrutura condiciona if/else, foi identificado que o sinal de atribuição estava errado. 
O sinal de atribuição " = " foi corrigido para o sinal de igualdade " == " e melhorei a saida com um texto mais explicativo




