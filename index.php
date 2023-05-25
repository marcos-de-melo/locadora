<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>LOCADORA DEV</title>
</head>

<body>

    <head>
        <h1>LOCADORA DEV</h1>
        <ul>
            <li><a href="index.php?menu=home">Home</a></li>
            <li><a href="index.php?menu=videos">Vídeos</a></li>
            <li><a href="index.php?menu=categorias">Categorias</a></li>
            <li><a href="index.php?menu=clientes">Clientes</a></li>
        </ul>
    </head>
    <main>
        <!-- Conteúdo principal do sistema  -->

        <!-- MENU DE INCLUSÃO DE CONTEÚDO  -->
        <?php
        if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
        } else {
            $menu = "";
        }
        switch ($menu) {
            case "home":
                include("home.php");
                break;
            case "videos":
                include("lista-videos.php");
                break;
            case "categorias":
                include("lista-categorias.php");
                break;
            case "clientes":
                include("lista-clientes.php");
                break;
            default:
                include("home");
        }
        ?>
        <!-- ----------------------------- -->
    </main>
</body>

</html>