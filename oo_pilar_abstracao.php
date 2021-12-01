<?php

class Funcionario{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters e setters (overloading / sobrecarga)

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }
    
    /*
    function setNome($nome){
        $this->nome = $nome;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function getNome(){
        return $this->nome;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }
    */

    //métodos
    function resumirCadFunc(){
        return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s) e seu telefone é: ' . $this->__get('telefone');
    }

    function modificarNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }
}

$funcionario1 = new Funcionario();
$funcionario1->__set('nome','José');
$funcionario1->__set('telefone', '11 99999-8888');
$funcionario1->__set('numFilhos', 3);
echo $funcionario1->resumirCadFunc();
echo '<br/>';
echo $funcionario1->__get('nome') . ' possui ' . $funcionario1->__get('numFilhos') . ' filho(s) e seu telefone é: ' . $funcionario1->__get('telefone');

echo '<br/>';

$funcionario2 = new Funcionario();
$funcionario2->__set('nome','Maria');
$funcionario2->__set('telefone', '11 99999-6666');
$funcionario2->__set('numFilhos', 2);
echo $funcionario2->resumirCadFunc();
echo '<br/>';
echo $funcionario2->__get('nome') . ' possui ' . $funcionario2->__get('numFilhos') . ' filho(s) e seu telefone é: ' . $funcionario2->__get('telefone');
?>