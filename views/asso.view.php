<?php ob_start(); ?>
   <div class="container">

        <h1>Les Associations du BUT GEII</h1>
        <h2>Travail d’Intégration Universitaire</h2>

        <p>
            Nous comptons au sein de notre BUT à Calais : 2 Associations.
        </p>

        <p>
            Il y a :
            <br>- L’association GEII AEAE (Association Étudiants - Anciens Étudiants)
            <br>- L’association Récup’PC
        </p>

        <p>
            Je vais donc vous présenter quels sont les différents rôles et objectifs 
            des 2 associations.
        </p>

        <h3>GEII AEAE :</h3>

        <p>
            Tout d’abord, je vais commencer par l’association GEII AEAE, il 
            s’agit du Bureau des élèves de notre parcours universitaire. Au sein de 
            l’IUT, il y a aussi 2 autres associations pour le BUT Informatique et le 
            BUT GEA étant donné qu’il y a 3 cursus différents au sein de l’IUT.
        </p>

        <p>Nous avons donc les différents membres de l’association :</p>

        <ul>
            <li>Président : Sven Prevost (BUT 2)</li>
            <li>Vice-Président : Xavier Krystek (BUT 1)</li>
            <li>Trésorier : Damien Pecaut (BUT 3)</li>
            <li>Secrétaire : Riwal Charpentier (BUT 2)</li>
        </ul>

        <p>
            L’objectif de notre association est de renforcer la cohésion entre les 
            étudiants de toutes les années.
        </p>

        <p>
            Dans notre associations, nous avons différentes valeurs tels que la 
            Convivialité, la Solidarité, l’Intégration des étudiants et le dynamisme 
            dans les projets.
        </p>

        <h3>Récup’PC :</h3>

        <p>
            Ensuite, je vais vous parler de la deuxième association qu’est 
            Récup’PC. Il s’agit d’une association où nous récupérons des ordinateurs 
            que la mairie de Calais nous donne et nous faisons ce qu’il y a à faire afin 
            de pouvoir les redonné et pouvoir donné accès à certains foyer au 
            numérique et à un ordinateur.
        </p>

        <p>
            Cette associations est naît grâce à un projet tutoré et c’est devenu une 
            association au fil des années.
        </p>

        <p>Nous avons plusieurs membres dans cette associations comme :</p>

        <ul>
            <li>Sven Prevost</li>
            <li>Xavier Krystek</li>
            <li>Riwal Charpentier</li>
            <li>Loic Santune</li>
            <li>Robin Deblock</li>
            <li>Xavier Krystek</li>
        </ul>

    </div>
<?php
$content = ob_get_clean();
$style="asso";
require __DIR__ . "/template.php";
?>
