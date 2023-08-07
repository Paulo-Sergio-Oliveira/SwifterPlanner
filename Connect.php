<?php
try {
    $conn = new PDO("mysql:dbname=swifte53_planner; host=localhost; charset=utf8", "swifte53_user","S28f5)lann#$");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão".utf8_encode($e->getMessage());
}
?>