<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT GEII</title>
    <link rel="icon" href="public/images/logo.png" type="image/png">
    <link rel="stylesheet" href="public/css/base.style.css">
    <link rel="stylesheet" href=<?="public/css/".$style.".style.css"?>>    
</head>
<?php if ($style === "accueil"): ?>
    <script src="public/js/accueil.js" defer></script>
<?php endif; ?>
<body>
    <nav>
        <ul>
            <li><a href="accueil"><img src="public/images/logo.png" alt="ACCUEIL"></a></li>
            <li><a href="geii">BUT GEII A CALAIS</a></li>
            <li><a href="sae-alternance">SAE ET ALTERNANCE</a></li>
            <li><a href="chiffres">CHIFFRES</a></li>
            <li><a href="iut">BATIMENT IUT</a></li>
            <li><a href="associations">ASSOCIATIONS</a></li>
            <li><a href="public/pdf/reglement.pdf" target="_blank">REGLEMENT INTERIEUR BUT</a> </li>
        </ul>
    </nav>

    <main class="content">
        <section class="sec">
          <?= $content ?>
        </section>
    </main>

    <footer>
        <p>© Copyright Manon Denolf</p>
    </footer>
</body>
</html>
