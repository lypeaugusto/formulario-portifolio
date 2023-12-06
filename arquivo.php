<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o email e a senha foram enviados
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Aqui você pode realizar a autenticação ou outras ações com os dados do formulário
        // Por exemplo, verificar se o usuário e a senha correspondem a um usuário válido
        // ou armazenar os dados em um banco de dados

        // Exemplo de verificação simples (substitua por sua lógica real)
        if ($email == 'usuario@example.com' && $senha == 'senha123') {
            echo 'Login bem-sucedido!'; // Apenas para fins de demonstração
        } else {
            echo 'Login falhou. Verifique suas credenciais.'; // Apenas para fins de demonstração
        }
    }
}
?>
