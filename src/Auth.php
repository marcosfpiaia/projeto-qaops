<?php

class Auth {
    public function login($email, $senha) {
        // Simulando a busca no banco de dados do AltaraCRM
        $emailCadastrado = "marcosfpiaia@gmail.com";
        $senhaCadastrada = "SenhaForte123";

        // Verifica se bate exatemente com o "banco"
        if ($email === $emailCadastrado && $senha === $senhaCadastrada) {
            return true; // Sucesso
        }
        
        return false; // Falha (senha ou email errados)
    }
}