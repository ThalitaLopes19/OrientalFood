<?php

class Login {

    private $user;
    private $senha;

    public function __construct($user, $senha) {
        $this->user = $user;
        $this->senha = $senha;
    }

    public function validate() {
        if ($this->user === "usuario" && $this->senha === "senha") {
            return true;
        } else {
            return false;
        }
    }

    public function getErrorMessage() {
        return "Nome de usuário ou senha inválidos.";
    }
}

?>