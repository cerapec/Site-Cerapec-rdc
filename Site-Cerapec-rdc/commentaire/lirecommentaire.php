<?php
echo "<h2>Commentaires reçus :</h2>";
$filename = "comments.txt";

if (file_exists($filename)) {
    $lines = file($filename);
    foreach ($lines as $line) {
        echo "<p>" . nl2br(htmlspecialchars($line)) . "</p><hr>";
    }
} else {
    echo "<p>Aucun commentaire pour l’instant.</p>";
}
?>
