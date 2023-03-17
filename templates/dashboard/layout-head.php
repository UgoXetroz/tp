<?php
if ($isInternPage) {
    include '../authentification/checkIsConnected.php';
} else {
    include 'authentification/checkIsConnected.php';
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4"><?= $title ?></span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/dashboard.php" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/utilisateurs.php" class="nav-link">Utilisateurs</a></li>
            <li class="nav-item"><a href="/produits.php" class="nav-link">Produits</a></li>
            <li class="nav-item">
                <form action="authentification/deconnexion.php">
                    <button class="btn btn-danger" type="submit">Déconnexion</button>
                </form>
            </li>
        </ul>
    </header>