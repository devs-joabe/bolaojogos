<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?r=principal">LOGOTIPO</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?r=principal">Home</a></li>
                <li class="nav-item"><a href="noticias.php?r=noticias">Noticias</a></li>
                <li class="nav-item"><a href="sobre.php?r=sobre">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><span class="glyphicon glyphicon glyphicon-log-out"></span>Sair</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>