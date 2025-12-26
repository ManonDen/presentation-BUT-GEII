<?php ob_start();
?>
    <h1>home</h1>

<?php
$content = ob_get_clean();
$style="accueil";
require __DIR__ . "/template.php";
?>