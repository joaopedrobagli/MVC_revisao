<?php

class BancodeDados{
    private $host;
    private $login;
    private $senha;
    private $dataBase;


    public function __construct($host, $login, $senha, $dataBase){
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataBase = $dataBase;
    }

    public function ConectarBD(){
        $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        return($conexao);
    }

   public function InserirCarro($carro){
    $conexao = $this->conectarBD();
    $consulta= "INSERT INTO carro (Nome, Fabricante, Ano, Preco) 
                 VALUES ('{$carro->get_Nome()}','{$carro->get_Fabricante()}','{$carro->get_Ano()}','{$carro->get_Preco()}')";
    mysqli_query($conexao,$consulta);
   }

   public function RetornarCarro()
{
    $conexao = $this->ConectarBD();
    $consulta = "SLELECT * FROM carro";
    $listaCarro = mysqli_query($conexao, $consulta);
    return $listaCarro;    
    }

}




?>