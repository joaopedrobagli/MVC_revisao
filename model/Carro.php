<?php

class Carro{

    protected $Nome;
    protected $Fabricante;
    protected $Ano;
    protected $Preco;

    public function __construct($Nome, $Fabricante, $Ano, $Preco){
        $this->Nome = $Nome;
        $this->Fabricante = $Fabricante;
        $this->Ano = $Ano;
        $this->Preco = $Preco;
    }


    public function set_Nome($Nome){
        $this->Nome = $Nome;
    }

    public function get_Nome(){
        return ($this->Nome);
    }

    public function set_Fabricante($Fabricante){
        $this->Fabricante = $Fabricante;
    }

    public function get_Fabricante(){
        return ($this->Fabricante);
    }

    public function set_Ano($Ano){
        $this->Ano = $Ano;
    }

    public function get_Ano(){
        return( $this ->Ano);
    }

    public function set_Preco($Preco){
        $this->Preco = $Preco;
    }

    public function get_Preco(){
        return($this->Preco);
    }

    public function atualizarpreco($taxa){
        $precoAtualizado = $this->Preco * (1 + $taxa);
    $this->Preco = $precoAtualizado;

    }


}



?>