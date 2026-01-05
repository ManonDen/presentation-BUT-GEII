<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégration à l'université en GEII</title>
    <link rel="stylesheet" href="public/css/base.style.css">
    <link rel="stylesheet" href=<?="public/css/".$style.".style.css"?>>
</head>
    <nav >
        <li><a href="accueil"><img src="public/images/logo.png" alt="logo iut"></a></li>
        <li><a href="geii">BUT GEII</a></li>
        <li><a href="#contact">ASSOCIATIONS</a></li>
        <li><a href="#about">INFORMATIONS ULCO</a></li>
        <li><a href="#about">REGLEMENT INTERIEUR</a></li>
    </nav>
<body>

    <main class="content">
        <section class="sec">
          <?= $content ?>
        </section>
    </main>
</body>
    <footer>
        <p>© Copyright Manon Denolf</p>
    </footer>
</html>
