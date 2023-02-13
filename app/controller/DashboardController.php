<?php

class DashboardController
{

    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
        ]);
        $template = $twig->load('dashboard.php');
        $parameters['nome_user'] = $_SESSION['usr']['nome_user']; 

        return $template->render($parameters);
    }

    public function logout() {
        unset($_SESSION['usr']);
        session_destroy(); 

        header('Location: http://localhost/site'); 
    }
}