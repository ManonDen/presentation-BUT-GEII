<?php ob_start();
?>

<section class="chiffres">
    <h1>ULCO en quelques chiffres :</h1>

    <ul class="chiffres-list">
        <li>
            <a href="public/pdf/chiffres.pdf" target="_blank">
                Les chiffres
            </a>
        </li>
    </ul>

    <div class="content-block">
        <img src="public/images/bd1.jpeg" alt="image">
        <img src="public/images/bd2.jpeg" alt="image">
    </div>
</section>


<?php
$content = ob_get_clean();
$style="chiffres";
require __DIR__ . "/template.php";
?>