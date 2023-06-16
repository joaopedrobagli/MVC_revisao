<?php

require_once("../model/BancodeDados.php");
require_once("../model/Carro.php");


class Controlador{

    private $BancodeDados;

    function __construct(){
        $this->BancodeDados = new BancodeDados("localhost", "root", "", "carro");
    }

    public function CadastrarCarro($Nome,  $Fabricante, $Ano, $Preco){
        $carro = new carro($Nome, $Fabricante, $Ano, $Preco);
        $this->BancodeDados->InserirCarro($carro);
    }

    public function visualiazarCarro(){
        $car ="";
        $listaCarro = $this->BancodeDados->retornarCarro();
        while($carro = mysqli_fetch_assoc($listaCarro)){
            $car .= "<section class=\"conteudo-bloco\">" .
            "<h2>" . $carro['Nome'] . "</h2>" . 
            "<p>Fabricante: " . $carro['Fabricante'] . "</p>" . 
            "<p>Ano: " . $carro['Ano'] . "</p>".
            "<p>Preco: " . $carro['Preco'] . "</p>".
            "</section>";
        }

        return $car;

        
    }
}





?>
