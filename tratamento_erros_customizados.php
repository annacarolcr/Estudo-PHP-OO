<?php
    class MinhaExceptionCustomizada extends Exception{

        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemCustomizada(){
            return $this->erro;
        }
    }

    //Error (php)
    //Exception (programadores)
    //Customizadas (programadores)
    
    try{
        throw new MinhaExceptionCustomizada('Esse é um erro de teste');
    }catch(MinhaExceptionCustomizada $e){
        echo $e->exibirMensagemCustomizada();
    }
?>