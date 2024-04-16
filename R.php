<?php
// Chemin vers le répertoire courant
$chemin_courant = './';

// Utilise glob() pour obtenir la liste des fichiers et répertoires dans le répertoire courant
$elements = glob($chemin_courant . '*', GLOB_MARK);

// Affiche les éléments du répertoire courant
foreach ($elements as $element) {
    echo basename($element) . "<br>";
}
?>
