<?php
include_once "_scripts/config.php";
include_once 'navbar.php';
include_once '_scripts/autenticar.php';

$usuario = $_SESSION['email'];

try {
    $sql = "SELECT * FROM aposta a join dados_jogos d on d.id = a.id_dados ";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

} catch (\PDOException $e) {
    echo $e->getMessage();
}

die(json_encode($dados));