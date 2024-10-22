<?php

require '../models/UsuarioModel.php';

class UsuarioController {

    private $usuarioModel = null;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function create($dadosUsuario) {
        
        $this->validaCPF($dadosUsuario['cpf']);
        $this->validaSenha($vadadosUsuariolues['cpf']);
        $this->validaEmail($dadosUsuario['cpf']);

        $this->usuarioModel->create($dadosUsuario);
    }

    private function validaCPF($cpf) {
        // codigo para validar o cpf
    }
}


/*
   NO CONTROLLER USUARIO:

   $dadosUsuario = [
        'cpf' => '12345678900',
        'email' => 'beltrano@tralala.com',
        'senha' => 1234,
        'excluido' => 0,
    ];

    $usuarioModel->update(2, $dadosUsuario) ;
 */