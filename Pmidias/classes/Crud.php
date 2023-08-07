<?php

class Crud 
{
    private $conect;
    
    private $id_book;
    private $img;
    private $title;
    private $author;
    private $status;
    private $id_user;

    function __construct($conn)
    {
        $this->conect = $conn;
    }

    public function setDados($id_book,$img,$title,$author,$status,$id_user)
    {
        $this->id_book = $id_book;
        $this->img     = $img;
        $this->title   = $title;
        $this->author  = $author;
        $this->status  = $status;
        $this->id_user = $id_user;
    }
    
    public function insertDados()
    {   
            $habilitado = 1;
            $sql = $this->conect->prepare("INSERT INTO prateleira(id_book,img,title,author,status,id_user)
                                        VALUES(?,?,?,?,?,?)");
            $sql->bindParam(1,$this->id_book);
            $sql->bindParam(2,$this->img);
            $sql->bindParam(3,$this->title);
            $sql->bindParam(4,$this->author);
            $sql->bindParam(5,$this->status);
            $sql->bindParam(6,$this->id_user);
            
            if($sql->execute()){
                header("location: ../bookpage.php?id=$this->id_book");
            }else{
                echo "Dados Não Enviados";
            }
    }

    public function verify($id_user, $id_book)
    {

        $sql = $this->conect->prepare("SELECT * FROM prateleira WHERE id_user=? and id_book=?");

        $sql->bindValue(1,$id_user);
        $sql->bindValue(2,$id_book);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function readPrateleira($id_user)
    {
        $sql = $this->conect->prepare("SELECT * FROM prateleira WHERE id_user=? and status=?");

        $sql->bindValue(1,$id_user);
        $sql->bindValue(2,0);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function readLendo($id_user)
    {

        $sql = $this->conect->prepare("SELECT * FROM prateleira WHERE id_user=? and status=?");

        $sql->bindValue(1,$id_user);
        $sql->bindValue(2,1);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function readLido($id_user)
    {

        $sql = $this->conect->prepare("SELECT * FROM prateleira WHERE id_user=? and status=?");

        $sql->bindValue(1,$id_user);
        $sql->bindValue(2,2);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function updateStatus($status, $id_book, $id_user)
    { 
        $sql = $this->conect->prepare("UPDATE prateleira SET status=? WHERE id_book=? and id_user=?");

        $sql->bindValue(1,$status);
        $sql->bindValue(2,$id_book);
        $sql->bindValue(3,$id_user);

        if ($sql->execute()) {
            header("location: ../prateleira.php");
        }else{
            echo "Dados Não Enviados";
        }
    }

    public function deleteBook($id_book, $id_user)
    {
        $sql = $this->conect->prepare("DELETE FROM prateleira WHERE id_book=? and id_user=?");

        $sql->bindValue(1,$id_book);
        $sql->bindValue(2,$id_user);

        if ($sql->execute()) {
            header("location: ../prateleira.php");
        }else{
            echo "Não foi possivel deletar";
        }
    }

    public function avaliar($id_book, $id_user, $ava)
    {   
            $habilitado = 1;
            $sql = $this->conect->prepare("INSERT INTO avaliacao(avaliacao,id_book,id_user)
                                        VALUES(?,?,?)");
            $sql->bindParam(1,$ava);
            $sql->bindParam(2,$id_book);
            $sql->bindParam(3,$id_user);
            
            if($sql->execute()){
                header("location: ../bookpage.php?id=$id_book");
            }else{
                echo "Dados Não Enviados";
            }
    }

    public function verifyAva($id_user, $id_book)
    {

        $sql = $this->conect->prepare("SELECT * FROM avaliacao WHERE id_user=? and id_book=?");

        $sql->bindValue(1,$id_user);
        $sql->bindValue(2,$id_book);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function geralAva($id_book)
    {

        $sql = $this->conect->prepare("SELECT * FROM avaliacao WHERE id_book=?");

        $sql->bindValue(1,$id_book);

        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $geralAva = 0;

            foreach ($result as $value) {
                $geralAva += $value['avaliacao'];
            }

            $geralAva = $geralAva/count($result);

            $geral = array($geralAva, count($result));

            return $geral;
        }else{
            $geral = array(0,0);

            return $geral;
        }
        

        
    }
}

?>