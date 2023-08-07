<?php
include("../classes/sessao.php");

$obj = new sessao($conn);

session_start();

$obj->logoff();

?>