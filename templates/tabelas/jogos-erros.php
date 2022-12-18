<?php
include_once "_scripts/config.php";
include_once 'navbar.php';
include_once '_scripts/autenticar.php';

$usuario = $_SESSION['email'];

try {
    $sql = "SELECT * FROM aposta a  join dados_jogos d on d.id = a.id_dados WHERE a.usuario = '$usuario' HAVING a.time1 != d.rt1 && a.time2 != d.rt2;";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

} catch (\PDOException $e) {
    echo $e->getMessage();
}

die(json_encode($dados));