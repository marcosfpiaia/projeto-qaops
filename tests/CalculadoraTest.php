<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../Calculadora.php';

class CalculadoraTest extends TestCase {
    public function testSomar() {
        $calc = new Calculadora();
        $resultado = $calc->somar(2, 3);
        $this->assertEquals(5, $resultado, "O resultado da soma de 2 e 3 deve ser 5.");
    }
}

// Teste finalizado via Kanban numa linha em branco 5