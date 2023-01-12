<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
</head>
<body>
<?php
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
    ?>
    <div class="message error">
        <?= $errors ?>
    </div> <?php
}
// Handling success messages.
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
    <div class="message success">
        <?= $success ?>
    </div> <?php
}
?>
<nav>
    <ul>
        <li><a href="">Présentation</a></li>
        <li><a href="">Compétences technique et langue</a></li>
        <li><a href="">Outils maîtrisés</a></li>
        <li><a href="">Exemples de projets</a></li>
    </ul>
</nav>

<h1>Vanessa Nectoux</h1>
<div>
    <p id="intro">Je suis développeuse web full-stack, ainsi que conceptrice et développeuse d'application.</p>
    <img src="/img/283071454_8262947760397701_1820033294722123302_n.jpg" alt="Portrait de moi" id="portrait">
</div>

<main>
    <?= $html ?>
</main>

<script src="build/js/front-bundle.js"></script>
</body>
</html>