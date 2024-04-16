<?php
// Chemin du fichier
$chemin_fichier = 'index.php';

// Lecture du contenu du fichier
$contenu = file_get_contents($chemin_fichier);

// Affichage du contenu
echo $contenu;
?>
