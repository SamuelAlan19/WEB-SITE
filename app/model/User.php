<?php

use Samuel\Database\Conexao;

class User
{

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $confirmar_senha;

    public function validarLogin()
    {

        $conn = Conexao::getConn();

        $sql = 'SELECT * FROM user WHERE email = :email';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $result = $stmt->fetch();

            if ($result['senha'] === $this->senha) {
                $_SESSION['usr'] = array('id_user' => $result['id'], 'nome_user' => $result['nome']);

                return true;
            }
        }

        throw new \Exception('Login Inválido');
    }

    public function validarCadastro()
    {

        if (isset($_POST['submit'])) {

            $conn = Conexao::getConn();

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confirmar_senha = $_POST['confirmar_senha'];


            if ($confirmar_senha == $_POST['confirmar_senha'] && $senha == $_POST['confirmar_senha']) {
                $sql = "INSERT INTO user (nome, email, senha, confirmar_senha) VALUES ('$nome','$email', '$senha', '$confirmar_senha')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }
        }
    }


    public function setEmail($email)
    {

        $this->email = $email;
    }

    public function setNome($nome)
    {

        $this->nome = $nome;
    }

    public function setSenha($senha)
    {

        $this->senha = $senha;
    }

    public function setConfirmar_Senha($confirmar_senha)
    {

        $this->confirmar_senha = $confirmar_senha;
    }

    public function getConfirmar_Senha($confirmar_senha)
    {

        return $this->confirmar_senha;
    }

    public function getEmail($email)
    {

        return $this->email;
    }

    public function getNome($nome)
    {

        return $this->nome;
    }

    public function getSenha($senha)
    {

        return $this->senha;
    }
}
