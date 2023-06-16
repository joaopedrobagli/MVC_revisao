<?php

session_start();
require_once("../controller/controlador.php");
require_once("../model/Carro.php");

$Controlador = new Controlador();

if(isset($_POST['inputNome']) && isset($_POST['inputFabricante'])
&& isset($_POST['inputAno']) && isset($_POST['inputPreco'])){

    $Nome = $_POST['inputNome'];
    $Fabricante = $_POST['inputFabricante'];
    $Ano = $_POST['inputAno'];
    $Preco = $_POST['inputPreco'];

    $Controlador->CadastrarCarro($Nome, $Fabricante, $Ano, $Preco);

    header('Location:../view/cadastrarcarro.php');
    die();

}




?>