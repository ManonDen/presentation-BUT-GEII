<?php ob_start();
?>

<div class="video-container">
    <video autoplay muted loop id="bg-video">
        <source src="public/videos/batiment_iut.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de vidéo.
    </video>
</div>

<?php
$content = ob_get_clean();
$style="iut";
require __DIR__ . "/template.php";
?>