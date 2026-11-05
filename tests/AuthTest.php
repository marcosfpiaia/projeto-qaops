<?php
use PHPUnit\Framework\TestCase;

// Puxa o arquivo do sistema que criamos no Passo 1
require_once 'src/Auth.php'; 

class AuthTest extends TestCase {
    
    // Teste 1: O "Caminho Feliz" (Tudo certo)
    public function testLoginComCredenciaisCorretasDeveRetornarTrue() {
        $auth = new Auth();
        $resultado = $auth->login("marcosfpiaia@gmail.com", "SenhaForte123");
        
        // Afirmo que o resultado DEVE ser Verdadeiro (True)
        $this->assertTrue($resultado, "O sistema deveria aprovar o login com a senha correta.");
    }

    // Teste 2: O "Caminho Triste" (Ataque/Erro)
    public function testLoginComSenhaIncorretaDeveRetornarFalse() {
        $auth = new Auth();
        $resultado = $auth->login("marcosfpiaia@gmail.com", "senha_errada_do_hacker");
        
        // Afirmo que o resultado DEVE ser Falso (False)
        $this->assertFalse($resultado, "O sistema não pode aprovar logins com senha incorreta.");
    }
}