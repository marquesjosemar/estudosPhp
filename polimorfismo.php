<?php

// Interface define o contrato
interface Pagamento {
    public function processar(float $valor): string;
}

// Classe que implementa o contrato
class CartaoCredito implements Pagamento {
    public function processar(float $valor): string {
        return "Pagamento de R$ {$valor} processado no Cartão de Crédito.";
    }
}

class Pix implements Pagamento {
    public function processar(float $valor): string {
        return "Pagamento de R$ {$valor} processado via PIX.";
    }
}

class Boleto implements Pagamento {
    public function processar(float $valor): string {
        return "Pagamento de R$ {$valor} processado com Boleto Bancário.";
    }
}

// Polimorfismo em ação:
function pagar(Pagamento $metodo, float $valor) {
    echo $metodo->processar($valor) . "<br>";
}

// Testando
pagar(new CartaoCredito(), 150.00);
pagar(new Pix(), 200.50);
pagar(new Boleto(), 300.00);
