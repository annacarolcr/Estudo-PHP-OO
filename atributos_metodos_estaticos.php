<?php
    class Exemplo{
        public static $atributo1 = 'atributo estático';

        public $atributo2 = 'atributo normal';

        public static function metodo1(){
            echo 'método estático'; //não pode usar o $this, visto que não é instanciado
        }

        public function metodo2(){
            echo 'método normal';
        }
    }

    //$x = new Exemplo(); //trabalhando com atributos e métodos estáticos não existe a necessidade de fazer a instância do objeto.
    echo Exemplo::$atributo1; //para acessar diretamente os atributos e métodos estáticos.
    echo '<br/>';
    Exemplo::metodo1();
?>