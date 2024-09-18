<?php

// CRUD
/*
    Create
    Read
    Update
    Delete
*/

class Usuario{
    public $cpf;
    public $senha;
    public $email;
    public $permissao;

    public function criar() {}
    public function getUsuario($login) {}
    public function getUsuarios() {}
    public function atualizar($id) {}
    public function excluir($id) {}
}
