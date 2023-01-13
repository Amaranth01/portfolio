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

<h1>Vanessa Nectoux</h1>
<div class="arrow" id="arrowLeft">
     <a href="" title="Parcours professionnel" class="left"> <span ><</span> </a>
</div>
<div class="arrow" id="arrowRight">
    <a href="" title="Outils maîtrisé et compétences technique" class="right"><span >  > </span></a>
</div>
<div>
    <p id="intro">Je suis développeuse web full-stack, ainsi que conceptrice et développeuse d'application.</p>
    <img src="/img/283071454_8262947760397701_1820033294722123302_n.jpg" alt="Portrait de moi" id="portrait">
</div>

<main>
    <?= $html ?>
</main>

<div id="link">
    <a href="https://github.com/Amaranth01" target="_blank"><i class="fa-brands fa-github"></i></a>
    <a href="https://www.linkedin.com/in/vanessa-nectoux-27b490179/"><i class="fa-brands fa-linkedin"></i></a>
</div>

<div class="arrow" id="arrowDown">
    <a href="" title="Projets" class="down"><p > > </p></a>
</div>

<script src="https://kit.fontawesome.com/f33464c73a.js" crossorigin="anonymous"></script>
<script src="build/js/front-bundle.js"></script>
</body>
</html>