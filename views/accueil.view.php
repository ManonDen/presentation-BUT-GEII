<?php ob_start();
?>
   <div class="carousel hero">
        <div class="carousel-inner">
            <?php for ($i = 1; $i < 5; $i++) { ?>
                <div class="carousel-item">
                    <img src="<?= 'public/images/image' . $i . '.jpg' ?>" alt="<?= 'Image ' . $i ?>">
                </div>
            <?php } ?>
        </div>

        <div class="carousel-caption">
            <h1>Bienvenue dans le BUT GEII</h1>
            <p>IUT Côte d’Opale – Calais</p>
        </div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>


    <div class="video-container">
        <video autoplay controls muted loop id="bg-video">
            <source src="public/videos/presentation.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéo.
        </video>
    </div>

<?php
$content = ob_get_clean();
$style="accueil";
require __DIR__ . "/template.php";
?>