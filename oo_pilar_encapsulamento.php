<?php

class Pai{
    private $nome = 'Jorge';
    protected $sobrenome = 'Almeida';
    public $humor = 'feliz';
    
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }
    

    private function executarMania(){
     echo 'assobiar';
    }

    protected function responder(){
        echo 'Olá!';
    }

    public function executarAcao(){
        $x = rand(1, 10);

        if($x >= 1 && $x <= 8){
            $this->responder();

        }else{
            $this->executarMania();
        }
        
    }
}



class Filho extends Pai{
    private $idade = 12;

    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '<pre/>';
    }

}

$pai = new Pai();
echo $pai->nome;
echo '<br/>';
$pai->nome = 'Pedro';
echo $pai->nome;

echo '<br/>';

echo $pai->executarAcao();

$filho = new Filho();

echo '<pre>';
print_r($filho);
echo '<pre/>';

$filho->__set('nome', 'Felipe');

echo '<pre>';
print_r($filho);
echo '<pre/>'

?>