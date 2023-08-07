<?php
class Crud
{
    private $meta;
    private $area;
    private $mes;
    private $concluida;
    private $anoIns;
    private $id;

    private $connect;
    
    function __construct($con){
        $this->connect = $con;
    }
    //FUNÇÃO QUE PEGA OS DADOS
    public function setDados($mes,$area,$concluida,$meta,$anoIns,$id){
        $this->mes = $mes;
        $this->area = $area;
        $this->concluida = $concluida;
        $this->meta = $meta;
        $this->anoIns = $anoIns;
        $this->id = $id;
    }
    //FUNÇÃO QUE INSERE OS DADOS NO BD
    public function insertDados(){
        $sql = $this->connect->prepare("INSERT INTO metas(mesSelecionado,areaMeta,concluido,metas,anoIns,id_user) VALUES (?,?,?,?,?,?)");

        $sql->bindParam(1,$this->mes);
        $sql->bindParam(2,$this->area);
        $sql->bindParam(3,$this->concluida);
        $sql->bindParam(4,$this->meta);
        $sql->bindParam(5,$this->anoIns);
        $sql->bindParam(6,$this->id);

        $sql->execute();
    }
    //FUNÇÃO QUE LÊ OS DADOS DO BD
    public function readInfo($area, $id){
        $query = $this->connect->prepare("SELECT * FROM metas WHERE areaMeta = ? AND id_user = $id");
        $query->execute([$area]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //FUNÇÃO QUE PAGA APENAS AS METAS NÃO CONCLUIDAS
    public function pegaConcluidas($id){
        $query = $this->connect->prepare("SELECT * FROM metas WHERE concluido = 0 AND id_user = $id");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //AQUI NÃO PRECISA NEM EXPLICAR
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM metas WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);

        $sql->execute();
    }
    //MARCA AS NÃO CONCLUIDAS COMO CONCLUIDAS
    public function updateConcluido($id, $concluido){
        try {
            $query = $this->connect->prepare("UPDATE metas SET concluido = ? WHERE id = ?");
            $query->execute([$concluido, $id]);
            echo "<script>console.log(".$id.",".$concluido.")</script>";
            // Se necessário, pode adicionar tratamento para verificar o sucesso da atualização
            // e lançar exceções ou retornar informações apropriadas
        } catch (PDOException $e) {
            // Trate erros, se ocorrerem
        }
    }
}