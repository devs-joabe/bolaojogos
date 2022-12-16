<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Inicio</title>
</head>

<body class="bg">




    <section>
        <?php
    if (!isset($_GET['r'])) {
        include "templates/login/index.php";
    } else {
        switch ($_GET['r']) {
            case 'inicio':
                include "templates/login/index.php";
                break;
            case 'palpites':
                include "templates/palpites/palpites.php";
                break;
            case 'cadastro':
                include "templates/cadastro/index.php";
                break;
            case 'principal':
                include "templates/inicio/index.php";
                break;             
            default:
                include "templates/login/index.php";
        }
    }
    ?>
    </section>


</body>

</html>