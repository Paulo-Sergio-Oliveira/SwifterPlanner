<?php

class Sessao 
{

    private $conect;
    private $sql;

    function __construct($conn)
    {
        $this->conect = $conn;
    }

    public function readUsers()
    { 
        $this->sql = $this->conect->prepare("SELECT * FROM usuarios"); 
        $this->sql->execute(); 
        $result = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $result;  
    }

    public static function autorizado($id)
    {
        session_start();
        $_SESSION['login'] = session_id();
        $_SESSION['id'] = $id;
        header("location: ../index.php"); 
    }

    public static function logoff(){  
        session_start();
        session_destroy();
        header("location:../index.php");
        exit; 
    }
}
?>