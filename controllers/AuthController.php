<?php

// Requer o arquivo user que contém o model user com as funções de manipulação de dados de usuários
require_once "models/user.php";

class AuthController
{
    // Função responsável pelo processo de login
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os valores do formulário
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            // Chama o método do model para encontrar o usuário pelo email
            $user = User::findByEmail($email);

            if ($user && password_verify($senha, $user["senha"])) {  // Verifica se a senha corresponde a um hash
                session_start();
                // Armazena na sessão o ID do usuário que está logado e seu perfil
                $_SESSION["usuario_id"] = $user["id"];
                $_SESSION["perfil"] = $user["perfil"];
                header("");
            }
        }
    }
}

?>
