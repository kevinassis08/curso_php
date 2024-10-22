<?php

abstract class BaseModel {

    public $fieldsSTR = '';
    public $valuesSTR ='';

    public $fieldsCommon = [
        'id',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
    ];

    public function createAdjust($fields, $values) {

        $this->fieldsSTR = implode(',', $fields) . ", excluido"; // cpf, email, senha, excluido

        foreach($values as $key => $value) {
            $this->valuesSTR .= "'{$value[$key]}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }

        // remove a virgula extra no final.
        $this->valuesSTR = str_replace(',', '', $this->valuesSTR, -1);
    }

    public function readAdjust($fields) {
        $this->fieldsSTR = array_merge($this->fieldsCommon, $fields) ;
    }

    public function updateAdjust($values) {

        foreach($values as $key => $value) {
            $this->fieldsSTR .= "$key = '{$value[$key]}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }

        // remove a virgula extra no final.
        $this->fieldsSTR = str_replace(',', '', $this->fieldsSTR, -1);
    }
}