<?php

class CadastroController
{

    function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
        ]);
        $template = $twig->load('cadastro.html');

        return $template->render();

    }

    function logar()
    {
        unset($_SESSION['user']);
        session_destroy();

        header('Location: http://localhost/site');
    }

    function validar() 
    {

        try {
            $user = new User;
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confirmar_senha = $_POST['confirmar_senha'];
            $user->validarCadastro();

            header ('Location: http://localhost/site/cadastro');
        } catch (\Exception $e) {
            header ('Location: http://localhost/site/cadastro');
        }

    }
}
