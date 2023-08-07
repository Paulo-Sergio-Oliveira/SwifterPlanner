<?php

class Cad 
{
    private $conect;
    
    private $nome;
    private $senha;
    
    function __construct($conn)
    {
        $this->conect = $conn;
    }

    public function setDadosCad($nome,$senha)
    {
        $this->nome = $nome;
        $this->senha = $senha;

    }

    public function insertCad()
    {
        $sql = $this->conect->prepare("INSERT INTO usuarios(nome,senha) VALUES(?,?)");
        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->senha);

        if($sql->execute()){
            echo "Dados Enviados";
        }else{
            echo "Dados Não Enviados";
        }
    }
}
?>