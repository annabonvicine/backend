<?php
class Professor{

//variaveis
public $nome;
public $disciplina;
private $cpf;
protected $salario;

//metodos
    public function ensinar (){
        echo "$this->nome está ensinando.";
    }
    
    public function corrigirProva(){
        echo"$this->nome está corrigindo provas.";
    }

    public function prepararAula(){
        echo"$this->nome está preparando uma aula. ";
    }

    private function fazerChamada(){
        echo"$this->nome está fazendo a chamada. ";
    }

    private function corrigirTarefa(){
        echo"$this->nome está corrigindo tarefas";
    }
    public function simularFazerChamada(){
        $this->fazerChamada();
    }

    public function simularCorrigirTarefa(){
        $this->corrigirTarefa();
    }
   
}

?>