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

<body>
<!--HEADER TOP-->
<div id="header-top">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>
<!--END HEADER TOP-->

<!--MAIN HEADER-->
<header id="main-header">

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="home">
                    <h1>
                        Base Project
                        <!--<img src="./images/logotipo.png" alt="logotipo" title="Logotipo" class="img-fluid">-->
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown Example
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                                <a class="dropdown-item last" href="#">Link 4</a>
                            </div>
                        </li>
                        <li class="nav-item<?php echo $baseUrl == '/login' ? ' active' : null; ?>">
                            <a class="nav-link" href="contato">Link Example</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--END MAIN HEADER-->