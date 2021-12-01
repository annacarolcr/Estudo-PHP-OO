<?php

class Carro extends Veiculo{
    
    public $teto_solar = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar(){
        echo 'o teto solar está abrindo';
    }

    function alterarPosicaoVolante(){
        echo 'alterando a posição do volante';
    }
}


class Moto extends Veiculo{

    public $contraPesoGuidao = 1;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar(){
        echo 'empinando';
    }

    function trocarMarcha(){
        echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
    }
}

class Veiculo{
    
    public $placa = null;
    public $cor = null;

    function acelerar(){
        echo 'acelerar';
    }

    function freiar(){
        echo 'freiar';
    }

    function trocarMarcha(){
        echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
}

$carro = new Carro('AE1234', 'preto');


$moto = new Moto('EGH1234', 'branco');

echo '<pre>';
print_r($carro);
echo '</pre>';
echo '<pre>';
print_r($moto);
echo '</pre>';

echo $carro->acelerar();
echo '<br/>';
echo $carro->freiar();
echo '<br/>';
echo $carro->trocarMarcha();
echo '<br/>';
echo $moto->trocarMarcha();


?>