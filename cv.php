<?php
$nom = "GHATTAS Lorris";
$titre = "Demande de stage dans l'informatique";
$presentation = "Étudiant en BTS SIO, option SISR (Solutions d’Infrastructure, Systèmes et Réseaux), je recherche un stage dans le domaine de l’informatique afin de développer et mettre en pratique mes compétences.";

$email = "ghattaslorris2@gmail.com";
$telephone = "07 71 24 04 40";
$ville = "Ymeray (28320)";
$age = "18 ans - Français";
$permis = "Permis B - Véhicule personnel";
$secteurs = "Épernon, Chartres, Gallardon";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CV.css">
    <title>CV - <?php echo $nom; ?></title>
</head>
<body>

<div class="cv-container">

    <!-- Partie Haute (En-tête) -->
    <div class="partie-haut">
        <h1><?php echo $nom; ?></h1>
        <h2><?php echo $titre; ?></h2>
        <p class="pres"><?php echo $presentation; ?></p>
    </div>

    <div class="separation">

        <!-- Colonne Gauche (Infos, Contact, Atouts) -->
        <div class="partie-gauche">
            <img src="pdp.png" alt="Photo de profil">

            <h3>Contact & Infos</h3>
            <p><?php echo $email; ?></p>
            <p><?php echo $telephone; ?></p>
            <p><?php echo $ville; ?></p>
            <p><?php echo $age; ?></p>
            <p><?php echo $permis; ?></p>
            <p>Secteurs : <?php echo $secteurs; ?></p>

            <h3>Langues</h3>
            <strong>Anglais</strong>
            <p>Niveau B2</p>

            <h3>Atouts</h3>
            <ul>
                <li>Patient</li>
                <li>Persévérant</li>
                <li>Sérieux</li>
                <li>Curieux</li>
                <li>Esprit d'équipe</li>
            </ul>
        </div>

        <!-- Colonne Droite (Diplômes, Expériences, Compétences) -->
        <div class="partie-droite">

            <!-- Diplômes et Formations -->
            <h3>Diplômes et Formations</h3>
            <ul>
                <li class="form">
                    Baccalauréat professionnel CIEL
                    <p class="date_dip">Sept. 2023 à juil. 2026 - Lycée Sully, Nogent-le-Rotrou</p> 
                </li>
                <li class="form">
                    Brevet d'initiation aéronautique (BIA)
                    <p class="date_dip">De jan. 2023 à juin 2023 - Val de Voise, Gallardon</p>
                </li>
                <li class="form">
                    Diplôme national du brevet
                    <p class="date_dip">2023 - Collège Val de Voise, Gallardon</p>
                </li>
            </ul>

            <!-- Expériences professionnelles -->
            <h3>Expériences professionnelles</h3>
            <ul>
                <li class="titre_exp">Développement web</li>
                <p class="date_dip">D'avr. 2025 à mai 2025 - SAS Lennagas, Houx</p>
                <ul>
                    <li class="form">Création du design sur l'application Figma</li>
                    <li class="form">Création de site internet sur l'application Webflow</li>
                </ul>

                <li class="titre_exp">Stage maintenance informatique</li>
                <p class="date_dip">Juil. 2024 - Dalo, 13 Rue du Clos Hubert, 28320 Gallardon</p>
                <ul>
                    <li class="form">Maintenance et diagnostic de postes informatiques</li>
                    <li class="form">Récupération et sauvegarde des données nécessaires</li>
                    <li class="form">Tri et évaluation de l’état des ordinateurs afin d’identifier les équipements réutilisables</li>
                </ul>

                <li class="titre_exp">Stage maintenance informatique</li>
                <p class="date_dip">2023 - GROUPE LS, Chartres</p>
                <ul>
                    <li class="form">Maintenance et diagnostic d’ordinateurs</li>
                    <li class="form">Récupération et sauvegarde de données</li>
                    <li class="form">Tri et remise en état des équipements réutilisables</li>
                </ul>

                <li class="titre_exp">Stage maintenance informatique</li>
                <p class="date_dip">De jan. 2024 à févr. 2024 - Groupe Car Lovers, 1 Rue Jacques Grand, 28630 Nogent-le-Phaye</p>
                <ul>
                    <li class="form">Gestion et suivi des demandes informatiques via un système de tickets</li>
                    <li class="form">Remplacement, synchronisation et installation de postes informatiques</li>
                    <li class="form">Maintenance et dépannage d’imprimantes et de matériel informatique</li>
                </ul>
            </ul>

            <!-- Compétences -->
            <h3>Compétences</h3>
            <strong>Compétences techniques</strong>
            <ul>
                <li><strong>Réseaux :</strong> Adressage IP · Maintenance réseau</li>
                <li><strong>Matériel :</strong> Maintenance PC · Assemblage · Réparation · Configuration de postes</li>
                <li><strong>Développement :</strong> HTML/CSS · C# · Webflow · PHP</li>
                <li><strong>Bureautique :</strong> Microsoft Word</li>
            </ul>

        </div> <!-- Fin de partie-droite -->

    </div> <!-- Fin de separation -->

</div> <!-- Fin de cv-container -->

</body>
</html>