<?php ob_start();
?>

<section class="sae-alternance">
    <h1>SAE et Alternance en BUT GEII</h1>

    <div class="content-block">
        <p>
            En BUT GEII, les SAE (Situations d’Apprentissage et d’Évaluation) occupent une place centrale dans la formation. Elles permettent de mettre en pratique les connaissances vues en cours à travers des projets concrets, souvent proches de situations industrielles réelles. Les SAE mobilisent plusieurs matières en même temps, comme l’électronique, l’automatisme, l’informatique industrielle ou l’électricité. Elles se font généralement en groupe et demandent de concevoir, réaliser, vérifier et expliquer un système technique. Par exemple, à l’IUT du Littoral Côte d’Opale, nous avons dû réaliser le prototype d’un minuteur dédié à la cuisson des œufs, en partant du cahier des charges jusqu’à la réalisation de la carte électronique et du programme. Ce type de projet permet de développer des compétences pratiques, mais aussi l’autonomie, le travail en équipe et la capacité à résoudre des problèmes concrets, ce qui prépare directement au monde professionnel
        </p>
        <img src="public/images/sae.png" alt="image">
        <p>
            L’alternance en BUT GEII permet de compléter efficacement la formation théorique et pratique suivie à l’IUT par une immersion prolongée en entreprise. L’étudiant alterne entre des périodes de cours et des périodes en entreprise, ce qui lui permet de mettre en application concrète les notions vues en classe, comme l’électronique, la maintenance, l’automatisme ou les systèmes industriels. En entreprise, il participe à des projets réels, utilise du matériel professionnel et apprend à respecter des contraintes de qualité, de sécurité et de délais. L’alternance permet aussi de développer des compétences professionnelles importantes, comme la communication, l’organisation du travail, l’adaptation à un environnement professionnel et la prise d’initiative. Elle aide l’étudiant à mieux comprendre les attentes des entreprises et à construire progressivement son projet professionnel. Enfin, ce mode de formation facilite l’insertion sur le marché du travail après le BUT, car l’étudiant possède déjà une expérience significative, tout en bénéficiant d’une rémunération pendant ses études.
        </p>
        <img src="public/images/sae2.png" alt="image">
    </div>
</section>


<?php
$content = ob_get_clean();
$style="sae-alternance";
require __DIR__ . "/template.php";
?>