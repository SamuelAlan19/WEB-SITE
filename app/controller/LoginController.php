<?php

class LoginController
{

    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
        ]);
        $template = $twig->load('index.html');
        $parameters['error'] = $_SESSION['msg_error'] ?? null; 

        return $template->render($parameters);
    }

    public function check()
    {

        try {
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setSenha($_POST['senha']);
            $user->validarLogin();

            header('Location: http://localhost/site/dashboard');
        } catch (\Exception $e) {
            $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/site');
        }
    }

    public function cadastro()
    {        
        header('Location: http://localhost/site/cadastro');          
    }
}
