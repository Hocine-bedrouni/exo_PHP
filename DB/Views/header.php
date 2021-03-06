<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">exo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                       Les Boucles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/php/view/boucles/exo1.php">exo1</a>
                        <a class="dropdown-item" href="/php/view/boucles/exo2.php">exo2</a>
                        <a class="dropdown-item" href="/php/view/boucles/exo3.php">exo3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Les Tableaux
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/php/view/tableau/exo1.php">exo1</a>
                        <a class="dropdown-item" href="/php/view/tableau/exo2-1.php">exo2-1</a>
                        <a class="dropdown-item" href="/php/view/tableau/exo2-2.php">exo2-2</a>
                        <a class="dropdown-item" href="/php/view/tableau/exo2-3.php">exo2-3</a>
                        <a class="dropdown-item" href="/php/view/tableau/exo3-1.php">exo3-1</a>
                        <a class="dropdown-item" href="/php/view/tableau/exo3-2.php">exo3-2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Les fonctions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/php/view/fonction/exo1.php">exo1</a>
                        <a class="dropdown-item" href="/php/view/fonction/exo2.php">exo2</a>
                        <a class="dropdown-item" href="/php/view/fonction/exo3.php">exo3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Les dates et les heures
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/php/view/date/exo1.php">exo1</a>
                        <a class="dropdown-item" href="/php/view/date/exo2.php">exo2</a>
                        <a class="dropdown-item" href="/php/view/date/exo3.php">exo3</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>