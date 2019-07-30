<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($pageTitle) ? $pageTitle : 'HoGrid'; ?></title>

    <meta name="description" content="">
    <meta name="author" content="Francis Gregori Munis - Hogrid">

    <!--FAVICON-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicons/favicon.ico">

    <!--STYLES-->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">

</head>

<?php
$bodyClass = 'internal-page';
switch ($baseUrl) {
    case '/':
        $bodyClass = 'homepage';
        break;
}
?>

<body class="<?php echo $bodyClass; ?>">
<!--HEADER TOP-->
<div id="header-top">
    <div class="container">
        <div class="row">

            <div class="slogan">
                <strong>
                    Força, Espaço <br> e Conforto.
                </strong>
            </div>

            <div class="search">
                <form action="">
                    <input type="text" placeholder="Buscar por...">
                    <button>
                        <span>Buscar</span>
                        <i class="dlk-icon-search"></i>
                    </button>
                </form>
            </div>

            <div class="languages">
                <div class="dropdown">
                    <button class="btn btn-theme dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Português
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Português</a>
                        <a class="dropdown-item" href="#">Inglês</a>
                    </div>
                </div>
            </div>

            <div class="logo">
                <a href="/">
                    <img src="../images/logo.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!--END HEADER TOP-->


<?php

if ($baseUrl === '/') {
    include './headers/homepage.php';
}
if ($baseUrl === '/sobre') {
    include './headers/sobre.php';
}
?>


<!--MAIN HEADER-->
<header id="main-header">

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item<?php echo $baseUrl == '/' ? ' active' : null; ?>">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item<?php echo $baseUrl == '/sobre' ? ' active' : null; ?>">
                            <a class="nav-link" href="/sobre">A Delka</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="submenus">
                                        <div class="vehicles">
                                            <strong>Caminhões Especial</strong>
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h4>DK9 <br> Motorhome Especial</h4>
                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo1.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="vehicles">
                                            <strong>Caminhões Especial</strong>
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h4>DK9 <br> Motorhome Especial</h4>
                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo1.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="vehicles">
                                            <strong>Caminhões Especial</strong>
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h4>DK9 <br> Motorhome Especial</h4>
                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo1.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="vehicles">
                                            <strong>Caminhões Especial</strong>
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h4>DK9 <br> Motorhome Especial</h4>
                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo1.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title"><h4>DK?? <br> Caminhão Animais</h4>

                                                    </div>
                                                    <div class="info">
                                                        <div class="image">
                                                            <img src="../temp-images/veiculo2.png" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        <a href="" class="btn-theme white-border">Conheça</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item<?php echo $baseUrl == '/blog' ? ' active' : null; ?>">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item<?php echo $baseUrl == '/representantes' ? ' active' : null; ?>">
                            <a class="nav-link" href="/representantes">Representantes</a>
                        </li>
                        <li class="nav-item<?php echo $baseUrl == '/contato' ? ' active' : null; ?>">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--END MAIN HEADER-->