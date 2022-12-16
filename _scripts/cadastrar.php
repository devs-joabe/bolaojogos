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
        header ('Location: http://localhost/projeto-erik/index.php?r=cadastro');
        alert('Usuário ja cadastrado');
    }else{
        $sql = "INSERT INTO login values (NULL, '$usuario', '$senha','$email')";
        $query = $mysqli->query($sql);
        
        if($query){
           header ('Location: http://localhost/projeto-erik/index.php?r=inicio');
        }else{
            header ('Location: http://localhost/projeto-erik/index.php?r=cadastro');
        }
    }
    
    }
?>