<!DOCTYPE html>
<html>
<head><title>Login - AltaraCRM</title></head>
<body>
    <h1>AltaraCRM</h1>
    <!-- Formulário que o robô vai preencher -->
    <form method="POST">
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <button type="submit">Entrar</button>
    </form>

    <?php
    // Conecta com o backend que fizemos antes
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'src/Auth.php';
        $auth = new Auth();
        
        if ($auth->login($_POST['email'], $_POST['senha'])) {
            echo "<h2>Bem-vindo, Marcos</h2>";
        } else {
            echo "<h2>Login inválido</h2>";
        }
    }
    ?>
</body>
</html>