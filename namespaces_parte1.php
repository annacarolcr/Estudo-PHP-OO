<?php

    namespace A;
    class Cliente implements CadastroInterface{
        public $name = 'Carol';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre/>';
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo 'salvar';
        }
    }

    interface CadastroInterface{
        public function salvar();
    }

    namespace B;
    class Cliente implements CadastroInterface{
        public $name = 'Gisele';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre/>';
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function remover(){
            echo 'remover';
        }
    }

    interface CadastroInterface{
        public function remover();
    }

    $cliente = new Cliente(); //por estar dentro do namespace B, instancia o objeto da Classe Cliente do namespace B.
    $cliente = new \A\Cliente(); //Identificamos com \A\ que queremos instanciar um objeto da classe Cliente do namespace A.
    
    echo '<pre>';
    print_r($cliente); // como o namespace não foi identificado, apresenta as informações do objeto $cliente do namespace B, visto que está dentro do espaço B.
    echo '<pre/>';
?>