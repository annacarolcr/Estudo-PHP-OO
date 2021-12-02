<?php

    interface EquipamentoEletronicoInterface{

        public function ligar();

        public function desligar();
    }
    
    class Geladeira implements EquipamentoEletronicoInterface{
        
        public function abrirPorta(){
            echo 'abrir a porta';
        }

        public function ligar(){
            echo 'ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

    class Televisao implements EquipamentoEletronicoInterface{

        public function trocarCanal(){
            echo 'trocar canal';
        }

        public function ligar(){
            echo 'ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

    $geladeira = new Geladeira();
    $televisao = new Televisao();

    //------------------------------------------------------

    interface MamiferoInterface{

        public function respirar();
    }

    interface TerrestreInterface{

        public function andar();
    }

    interface AquaticoInterface{

        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function conversar(){
            echo 'conversar';
        }

        public function respirar(){
            echo 'respirar';
        }

        public function andar(){
            echo 'andar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function esguichar(){
            echo 'esguichar';
        }

        public function respirar(){
            echo 'respirar';
        }

        public function nadar(){
            echo 'nadar';
        }
    }

    $humano = new Humano();
    $humano->andar();

    echo '<br/>';

    $baleia = new Baleia();
    $baleia->nadar();

    //-----------------------------------------

    interface AnimalInterface{

        public function comer();
    }

    interface AveInterface extends AnimalInterface{

        public function voar();
    }

    class Papagaio implements AveInterface{

        public function voar(){
            echo 'voar';  
        }

        public function comer(){
            echo 'comer';        
        }
    }
?>