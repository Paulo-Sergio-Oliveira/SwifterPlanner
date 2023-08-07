<?php
class Crud{
    private $connect;
    private $nome;
    private $email;
    private $idade;
    private $usuario;
    private $senha;
    private $cpf;
    private $data;
    private $conteudo;
    private $titulo;
    private $id_diario;
    private $id_plan;
    private $hora_de;
    private $hora_ate;
    private $id_titulo;
    private $planejamento;
    private $id_hab;
    private $id_user;
    private $seg;
    private $ter;
    private $qua;
    private $qui;
    private $sex;
    private $sab;
    private $dom;
    private $id_wp;
    private $semana;
    private $total;
    
    function __construct($conn)
    {
        $this->connect = $conn;
    }

    public function setDadosCad($nome, $email, $data){
        $this->nome = $nome;
        $this->email = $email;
        $this->data = $data;
    }
    public function setDadosLogin($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    public function setDadosHabitos($titulo, $id){
        $this->titulo = $titulo;
        $this->id_hab = $id;
    }
    public function setWeekHabitos($titulo, $semana, $total, $id, $id2){
        $this->titulo = $titulo;
        $this->semana = $semana;
        $this->total = $total;
        $this->id_hab = $id;
        $this->id_user = $id2;
    }
    public function setDadosDiario($titulo, $conteudo, $data, $id){
        $this->data = $data;
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
        $this->id_diario = $id;
    }
    public function setNewPlan($titulo, $data, $id){
        $this->data = $data;
        $this->titulo = $titulo;
        $this->id_plan = $id;
    }
    public function setWeekPlan($data, $seg, $ter, $qua, $qui, $sex, $sab, $dom, $id){
        $this->data = $data;
        $this->seg = $seg;
        $this->ter = $ter;
        $this->qua = $qua;
        $this->qui = $qui;
        $this->sex = $sex;
        $this->sab = $sab;
        $this->dom = $dom;
        $this->id_wp = $id;
    }
    public function setPlanejamento($plan, $hora_de, $hora_ate, $id, $id_tit){
        $this->planejamento = $plan;
        $this->hora_de = $hora_de;
        $this->hora_ate = $hora_ate;
        $this->id_plan = $id;
        $this->id_titulo = $id_tit;
    }
    public function insertCad(){
        $sql = $this->connect->prepare("INSERT INTO cadastros(nome, email, data_nasc) VALUES(?,?,?)");
        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->email);
        $sql->bindParam(3,$this->data);
        if ($sql->execute()) {
        }else{
            echo 'Ops! Parece que algo deu errado...';
        }
    }
    
    public function insertLog(){
        $sql = $this->connect->prepare("INSERT INTO logins(usuario, senha) VALUES(?,?)");
        $sql->bindParam(1,$this->usuario);
        $sql->bindParam(2,$this->senha);
        if ($sql->execute()) {
            header('Location: Login.php');
            die();
        }else{
            echo 'Ops! Parece que algo deu errado...';
        }
    }
    public function newDiario(){
        $sql = $this->connect->prepare("INSERT INTO diarios (titulo, conteudo, data, id_diario) VALUES (?, ?, ?, ?)");
        $sql->bindParam(1,$this->titulo);
        $sql->bindParam(2,$this->conteudo);
        $sql->bindParam(3,$this->data);
        $sql->bindParam(4,$this->id_diario);
        if ($sql->execute()) {
            header("Location:Diarios.php");
            die();
        } else {
            echo "Erro ao salvar o diário...";
        }
    }
    public function newHabito(){
        $sql = $this->connect->prepare("INSERT INTO habitos (titulo, id_hab) VALUES (?, ?)");
        $sql->bindParam(1,$this->titulo);
        $sql->bindParam(2,$this->id_hab);
        if ($sql->execute()) {
        } else {
            echo "Erro ao adicionar o hábito...";
        }
    }
    public function newWeekHabito(){
        $sql = $this->connect->prepare("INSERT INTO hab_total (titulo, semana, total, id_hab, id_user) VALUES (?, ?, ?, ?, ?)");
        $sql->bindParam(1,$this->titulo);
        $sql->bindParam(2,$this->semana);
        $sql->bindParam(3,$this->total);
        $sql->bindParam(4,$this->id_hab);
        $sql->bindParam(5,$this->id_user);
        if ($sql->execute()) {
        } else {
            echo "Erro ao adicionar o hábito...";
        }
    }
    public function newPlanTitle(){
        $sql = $this->connect->prepare("INSERT INTO new_plan (data, titulo, id_plan) VALUES (?, ?, ?)");
        $sql->bindParam(1,$this->data);
        $sql->bindParam(2,$this->titulo);
        $sql->bindParam(3,$this->id_plan);
        if ($sql->execute()) {
            header("Location:NewPlan.php");
            die();
        } else {
            echo "Erro ao salvar o diário...";
        }
    }
    public function newPlan(){
        $sql = $this->connect->prepare("INSERT INTO planejamentos 
        (planejamento, hora_de, hora_ate, id_plan, id_titulo) 
        VALUES (?, ?, ?, ?, ?)");
        $sql->bindParam(1,$this->planejamento);
        $sql->bindParam(2,$this->hora_de);
        $sql->bindParam(3,$this->hora_ate);
        $sql->bindParam(4,$this->id_plan);
        $sql->bindParam(5,$this->id_titulo);
        if ($sql->execute()) {
            header("Location:NewPlan.php");
            die();
        } else {
            echo "Erro ao salvar o diário...";
        }
    }
    public function newWeekPlan(){
        $sql = $this->connect->prepare("INSERT INTO weekplan (data, domingo, segunda, terca, quarta, quinta, 
        sexta, sabado, id_wp) VALUES (?,?,?,?,?,?,?,?,?)");
        $sql->bindParam(1,$this->data);
        $sql->bindParam(2,$this->dom);
        $sql->bindParam(3,$this->seg);
        $sql->bindParam(4,$this->ter);
        $sql->bindParam(5,$this->qua);
        $sql->bindParam(6,$this->qui);
        $sql->bindParam(7,$this->sex);
        $sql->bindParam(8,$this->sab);
        $sql->bindParam(9,$this->id_wp);
        if ($sql->execute()) {
            header("Location:WeekPlan.php");
            die();
        }else{
            echo 'Ops! Parece que algo deu errado...';
        }
    }
    public function getLogin(){
        $sql = $this->connect->prepare("SELECT * FROM logins");
        $sql->execute(); 
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllLogin(){
        $sql = $this->connect->prepare("SELECT * FROM logins");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getHabitos($id){
        $sql = $this->connect->prepare("SELECT * FROM habitos WHERE id_hab=$id");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getWeekHab($id){
        $sql = $this->connect->prepare("SELECT * FROM hab_total WHERE id_user=$id ORDER BY semana ASC");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getWeekHabitos($id, $semana){
        $sql = $this->connect->prepare("SELECT * FROM hab_total WHERE semana=? AND id_hab=?");
        $sql->bindValue(1,$semana,PDO::PARAM_STR);
        $sql->bindValue(2,$id,PDO::PARAM_STR);
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getWeekHabitos2($id){
        $sql = $this->connect->prepare("SELECT * FROM hab_total WHERE id_user=$id");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getWeekPlan($id){
        $sql = $this->connect->prepare("SELECT * FROM weekplan WHERE id_wp=$id");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getWPlan($id){
        $sql = $this->connect->prepare("SELECT * FROM weekplan WHERE id=$id");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getULogin(){
        $sql = $this->connect->prepare("SELECT * FROM logins");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getDiario($id){
        $sql = $this->connect->prepare("SELECT * FROM diarios WHERE id_diario=$id ORDER BY data DESC");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getAllPlanTitle($id){
        $sql = $this->connect->prepare("SELECT * FROM new_plan WHERE id_plan=$id ORDER BY data ASC");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function getPlan($id){
        $sql = $this->connect->prepare("SELECT * FROM new_plan WHERE id = $id");
        $sql->execute();
        return $sql->fetchAll();
    }
    public function getAllPlan($id_tit){
        $sql = $this->connect->prepare("SELECT * FROM planejamentos WHERE id_titulo = $id_tit ORDER BY hora_de ASC");
        $sql->execute(); 
        return $sql->fetchAll();
    }
    public function readInfo($id=null){
        if(isset($id)){
            $sql = $this->connect->prepare("SELECT * FROM cadastros WHERE id=?");
            $sql->bindValue(1,$id);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
        }else{
            $this->getAllCad();
            $this->getAllLog();
        }
    }
    public function readUser($usuario=null){
        if(isset($usuario)){
            $sql = $this->connect->prepare("SELECT * FROM logins WHERE usuario LIKE ?");
            $sql->bindValue(1,"%$usuario%");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }else{
            $this->getAllCad();
            $this->getAllLog();
        }
    }
    public function readDiarioD($id, $data=null){
        if(isset($data)){
            $sql = $this->connect->prepare("SELECT * FROM diarios WHERE data LIKE ? AND id_diario LIKE $id");
            $sql->bindValue(1,"%$data%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getDiario($id);
        }
    }
    public function readHab($id, $semana=null){
        if(isset($semana)){
            $sql = $this->connect->prepare("SELECT * FROM hab_total WHERE semana LIKE ? AND id_user LIKE $id");
            $sql->bindValue(1,"%$semana%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getDiario($id);
        }
    }
    public function readWeekPlan($id, $semana=null){
        if(isset($semana)){
            $sql = $this->connect->prepare("SELECT * FROM weekplan WHERE data LIKE ? AND id_wp LIKE $id");
            $sql->bindValue(1,"%$semana%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getDiario($id);
        }
    }
    public function readDiarioT($id, $titulo=null){
        if(isset($titulo)){
            $sql = $this->connect->prepare("SELECT * FROM diarios WHERE titulo LIKE ? AND id_diario LIKE $id");
            $sql->bindValue(1,"%$titulo%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getDiario($id);
        }
    }
    public function readPlanD($id, $data=null){
        if(isset($data)){
            $sql = $this->connect->prepare("SELECT * FROM new_plan WHERE data LIKE ? AND id_plan LIKE $id");
            $sql->bindValue(1,"%$data%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getPlan($id);
        }
    }
    public function readPlanT($id, $titulo=null){
        if(isset($titulo)){
            $sql = $this->connect->prepare("SELECT * FROM new_plan WHERE titulo LIKE ? AND id_plan LIKE $id");
            $sql->bindValue(1,"%$titulo%");
            $sql->execute();
            return $sql->fetchAll();
        }else{
            $this->getPlan($id);
        }
    }
    public function getAllCad(){
        $sql = $this->connect->query("SELECT * FROM cadastros");
        return $sql->fetchAll();
    }
    public function getCad(){
        $sql = $this->connect->query("SELECT * FROM cadastros");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllLog(){
        $sql = $this->connect->query("SELECT * FROM logins");
        return $sql->fetchAll();
    }
    public function getPlanTitle(){
        $sql = $this->connect->query("SELECT * FROM new_plan WHERE id = (SELECT MAX(id) FROM new_plan)");
        return $sql->fetchAll();
    }
    public function updateCad($id,$nome,$email,$data){
        $sql = $this->connect->prepare("UPDATE cadastros SET nome=?, email=?, data_nasc=? WHERE id=?");
        $sql->bindValue(1,$nome,PDO::PARAM_STR);
        $sql->bindValue(2,$email,PDO::PARAM_STR);
        $sql->bindValue(3,$data,PDO::PARAM_STR);
        $sql->bindValue(4,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateSenha($id, $senha){
        $sql = $this->connect->prepare("UPDATE logins SET senha=? WHERE id=?");
        $sql->bindValue(1,$senha,PDO::PARAM_STR);
        $sql->bindValue(2,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Login.php');
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateLogin($id, $usuario, $senha){
        $sql = $this->connect->prepare("UPDATE logins SET usuario=?, senha=? WHERE id=?");
        $sql->bindValue(1,$usuario,PDO::PARAM_STR);
        $sql->bindValue(2,$senha,PDO::PARAM_STR);
        $sql->bindValue(3,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Login.php');
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updatePlanLine($id, $plan, $hora_de, $hora_ate, $id_tit){
        $sql = $this->connect->prepare("UPDATE planejamentos SET planejamento=?, hora_de=?, hora_ate=? WHERE id=?");
        $sql->bindValue(1,$plan,PDO::PARAM_STR);
        $sql->bindValue(2,$hora_de,PDO::PARAM_STR);
        $sql->bindValue(3,$hora_ate,PDO::PARAM_STR);
        $sql->bindValue(4,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header("Location: FormUpPlan.php?id=".$id_tit."");
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updatePlanTitle($id, $data, $titulo, $id_tit){
        $sql = $this->connect->prepare("UPDATE new_plan SET data=?, titulo=? WHERE id=?");
        $sql->bindValue(1,$data,PDO::PARAM_STR);
        $sql->bindValue(2,$titulo,PDO::PARAM_STR);
        $sql->bindValue(3,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header("Location: FormUpPlan.php?id=".$id_tit."");
            die();
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateHab($id, $dom, $seg, $ter, $qua, $qui, $sex, $sab){
        $sql = $this->connect->prepare("UPDATE habitos SET domingo=?, segunda=?, terca=?, quarta=?, quinta=?, 
        sexta=?, sabado=? WHERE id=?");
        $sql->bindValue(1,$dom,PDO::PARAM_STR);
        $sql->bindValue(2,$seg,PDO::PARAM_STR);
        $sql->bindValue(3,$ter,PDO::PARAM_STR);
        $sql->bindValue(4,$qua,PDO::PARAM_STR);
        $sql->bindValue(5,$qui,PDO::PARAM_STR);
        $sql->bindValue(6,$sex,PDO::PARAM_STR);
        $sql->bindValue(7,$sab,PDO::PARAM_STR);
        $sql->bindValue(8,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateWeekHab($id, $total, $semana){
        $sql = $this->connect->prepare("UPDATE hab_total SET total=? WHERE semana=? AND id_hab=?");
        $sql->bindValue(1,$total,PDO::PARAM_STR);
        $sql->bindValue(2,$semana,PDO::PARAM_STR);
        $sql->bindValue(3,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{ 
            echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function updateWeekPlan($id, $dom, $seg, $ter, $qua, $qui, $sex, $sab){
        $sql = $this->connect->prepare("UPDATE weekplan SET domingo=?, segunda=?, terca=?, quarta=?, quinta=?, 
        sexta=?, sabado=? WHERE id=?");
        $sql->bindValue(1,$dom,PDO::PARAM_STR);
        $sql->bindValue(2,$seg,PDO::PARAM_STR);
        $sql->bindValue(3,$ter,PDO::PARAM_STR);
        $sql->bindValue(4,$qua,PDO::PARAM_STR);
        $sql->bindValue(5,$qui,PDO::PARAM_STR);
        $sql->bindValue(6,$sex,PDO::PARAM_STR);
        $sql->bindValue(7,$sab,PDO::PARAM_STR);
        $sql->bindValue(8,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{ 
        echo "Problemas ao tentar atualizar registro! <br> <a href='ReadAll.php'> Voltar </a>";
        }
    }
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM cadastros WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            $sql = $this->connect->prepare("DELETE FROM logins WHERE id=?");
            $sql->bindValue(1,$id,PDO::PARAM_STR);
            if ($sql->execute()) {
                header('Location: Tabela.php');
                die();
            }else{ 
            echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
            }
        }else{ 
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deleteDiario($id){
        $sql = $this->connect->prepare("DELETE FROM diarios WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Diarios.php');
            die();
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deleteAllPlan($id){
        $sql = $this->connect->prepare("DELETE FROM planejamentos WHERE id_titulo=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header('Location: Planejamentos.php');
            die();
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deletePlan($id, $id_tit){
        $sql = $this->connect->prepare("DELETE FROM planejamentos WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header("Location: FormUpPlan.php?id=".$id_tit."");
            die();
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deletePlanTitle($id){
        $sql = $this->connect->prepare("DELETE FROM new_plan WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deleteHab($id){
        $sql = $this->connect->prepare("DELETE FROM habitos WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deleteWeekHab($id){
        $sql = $this->connect->prepare("DELETE FROM hab_total WHERE id_hab=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header("Location: Habitos.php");
            die();
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
    public function deleteWeekPlan($id){
        $sql = $this->connect->prepare("DELETE FROM weeKplan WHERE id=?");
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        if ($sql->execute()) {
            header("Location: WeekPlan.php");
            die();
        }else{
        echo "Problemas ao tentar deletar registro! <br> <a href='ReadAllD.php'> Voltar </a>";
        }
    }
}