<?php
include 'autenticar.php';
include 'config.php';

$login = $_SESSION['email'];
$variavel = $_POST['count'] -1;
$a = 1;
for ($i = 1; $i <= $variavel; $i++){
    $jogo = $_POST['jogo'.$a];
    $timea = $_POST['timea'.$a];
    $timeb = $_POST['timeb'.$a];
    $sql = "INSERT INTO aposta (id,id_dados,time1, time2,situacao, usuario) VALUES (default,'$jogo','$timea','$timeb','FINALIZADO','$login');";
    $query = $mysqli->query($sql);
    $a++;
}
if($query){
    header ('Location: ../index.php?r=principal');
}
?>