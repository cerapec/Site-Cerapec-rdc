<?php
echo "<h1>Commentaires reçus</h1>";

if (file_exists("comments.txt")) {
    $lines = file("comments.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        echo "<p>" . nl2br(htmlspecialchars($line)) . "</p><hr>";
    }
} else {
    echo "<p>Aucun commentaire pour l'instant.</p>";
}

echo '<p><a href="index.html">Retour</a></p>';
?>
