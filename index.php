<?php
$nomEtudiant = "Yosbel Piloto Placeres";

$titre = "Examen final EDW2";
$sousTitre = "Déploiement d’un projet PHP existant sur N0C";

$notions = [
    "Git",
    "GitHub",
    "Markdown",
    "SSH",
    "N0C",
    "Déploiement web"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <main class="page">
        <section class="carte">
            <p class="etiquette">EDW2</p>

            <h1><?= htmlspecialchars($titre) ?></h1>
            <h2><?= htmlspecialchars($sousTitre) ?></h2>

            <p class="description">
                Ce projet PHP minimal est fourni dans le cadre de l’examen final.
                Il doit être récupéré avec Git, modifié, envoyé sur un dépôt GitHub public,
                puis déployé sur N0C.
            </p>

            <div class="bloc-nom">
                <strong>Déployé par :</strong>
                <span><?= htmlspecialchars($nomEtudiant) ?></span>
            </div>

            <h3>Notions évaluées</h3>

            <ul>
                <?php foreach ($notions as $notion): ?>
                    <li><?= htmlspecialchars($notion) ?></li>
                <?php endforeach; ?>
            </ul>

            <p class="note">
                Si vous voyez cette page en ligne avec votre nom, le déploiement fonctionne.
            </p>
        </section>
    </main>
</body>
</html>