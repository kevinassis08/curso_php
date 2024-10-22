<?php

class FormatarDados {

    // Propriedades || atributos
    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $this->texto = preg_replace('/[^0-9]/', '', $texto);
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {
        
        // (1 == 1) ? true : false;

        // if (1 == 1) {
        //     true;
        // } else {
        //     false;
        // }

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

        $a =0;
        $valorMascarado = "";
        
        for ($i=0; $i <= strlen($mascara); $i++) {
    
            if ($mascara[$i] == '#') {
                $valorMascarado .=  $texto[$a];
                $a++;
            } else {
                $valorMascarado .= $mascara[$i];
            }
    
        }
    
        return $valorMascarado;
    }

    public function validCnpj() {
    
        // Verifica se o CNPJ tem 14 dígitos
        if (strlen($this->texto) != 14) {
            return false;
        }
    
        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{13}/', $this->texto)) {
            return false;
        }
    
        // Calcula o primeiro dígito verificador
        $soma = 0;
        $multiplicador = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        for ($i = 0; $i < 12; $i++) {
            $soma += $this->texto[$i] * $multiplicador[$i];
        }
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;
    
        if ($this->texto[12] != $digito1) {
            return false;
        }

        // Calcula o segundo dígito verificador
        $soma = 0;
        $multiplicador = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        for ($i = 0; $i < 13; $i++) {
            $soma += $this->texto[$i] * $multiplicador[$i];
        }
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;

        return $this->texto[13] == $digito2;
    }
}



$texto = "5554999912933";
$mascara = "+## (##) # ####-####";

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo $formatarDados->addMask();
