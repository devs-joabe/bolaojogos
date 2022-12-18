<?php
session_start();
?>
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

$sql = "SELECT id FROM login WHERE email = '$email'";
$query = $mysqli->query($sql);
$total = $query->num_rows;

if($total==0){ ?>
    <script type="text/javascript">
        Swal.fire({
            title:'Ops!',
            text:'Email e senha incorreta ou nao cadastrado',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../index.php?r=inicio";
            }
        })
    </script>
<?php }else{
    $sql = "SELECT id FROM login WHERE email = '$email' and senha = '$senha'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total==0){?>
    <script type="text/javascript">
       Swal.fire({
           title:'Ops!',
           text:'Email e senha incorreta ou nao cadastrado',
           icon:'error',
           confirmButtonText:'Ok'
       }).then((result)=>{
           if(result.isConfirmed){
            location.href="../index.php?r=inicio";
           }
       })
   </script>
   <?php }else{
      $_SESSION['email'] = $email;
      header ('Location: ../index.php?r=principal');
   }
}
}
?>
   </body>
</html>