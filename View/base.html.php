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
<a href="" title="Parcours" target="_blank">
    <div class="arrow arrowLeft">
        <p id="parcours">
            P <br>
            A <br>
            R <br>
            C <br>
            O <br>
            U <br>
            R <br>
            S <br>
            <br>
        </p>
    </div>
</a>

<a href=""  title="Projets">
    <div class="arrow arrowRight">
        <p id="project">
            P <br>
            R <br>
            O <br>
            J <br>
            E <br>
            T <br>
            S <br>
        </p>
    </div>
</a>
<div>
    <p id="intro">Je suis développeuse web full-stack, ainsi que conceptrice et développeuse d'application.</p>
    <img src="/img/283071454_8262947760397701_1820033294722123302_n.jpg" alt="Portrait de moi" id="portrait">
</div>

<div id="aboutMe">
    <p>
        Je vous présente mon portfolio qui retrace mon parcours professionnel. J'ai toujours eu soif d'en savoir plus,
        il n'y a rien de pire que de ne plus apprendre. Le développement web, ainsi que la conception d'application
        ont été une évidence pour moi.
    </p>
</div>

<main>
    <?= $html ?>
</main>

<div id="link">
    <a href="https://github.com/Amaranth01" target="_blank"><i class="fa-brands fa-github"></i></a>
    <a href="https://www.linkedin.com/in/vanessa-nectoux-27b490179/" target="_blank"><i
                class="fa-brands fa-linkedin"></i></a>
    <a href="" target="_blank" title="Contact"><i class="fa-solid fa-address-card"></i></a>
</div>

<a href="" title="Outils maîtrisé et compétences technique" target="_blank" class="down">
    <div class="arrow arrowDown">
        <p id="utils">
            OUTILS ET COMPETENCES
        </p>
    </div>
</a>

<script src="https://kit.fontawesome.com/f33464c73a.js" crossorigin="anonymous"></script>
<script src="build/js/front-bundle.js"></script>
</body>
</html>