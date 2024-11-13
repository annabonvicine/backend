<?php
class Pessoa{

//variaveis
public $nome;
public $idade;
protected $cpf;
protected $endereço;

//metodos
    public function apresentar (){
        echo "$this->nome está apresentando.";
    }
    
    public function caminhar(){
        echo"$this->nome está caminhando.";
    }

    public function falar(){
        echo"$this->nome está falando. ";
    }

    private function comer(){
        echo"$this->nome está comendo ";
    }

    private function dormir(){
        echo"$this->nome está dormindo";
    }
    public function simularComendo(){
        $this->comer();
    }

    public function simularDormindo(){
        $this->dormir();
    }
   
}

?>