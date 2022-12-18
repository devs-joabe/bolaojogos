<html>
    <body>
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(!empty($_POST['email'])){
    include "config.php";
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $usuario = $_POST['usuario'];

    $sql = "SELECT id FROM login WHERE email = '$email'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total>=1){
        echo "<script>alert('Esse email ja foi cadastrado');</script>";
        }else{
        $sql = "INSERT INTO login values (NULL, '$usuario', '$senha','$email')";
        $query = $mysqli->query($sql);
        if($query){ 
            echo "<script>alert('Cadastro feito com sucesso');</script>";
     }else{ 
       echo "?><script>alert('Erro no cadastro tente novamente');</script>";
}
    }
}
?>
</body>
</html>