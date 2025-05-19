<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $comment = htmlspecialchars($_POST["comment"]);
    $date = date("Y-m-d H:i:s");

    $line = "$date - $name: $comment\n";

    file_put_contents("comments.txt", $line, FILE_APPEND | LOCK_EX);

    echo "<p>Merci pour votre commentaire !</p>";
    echo '<p><a href="index.html">Retour</a></p>';
}
?>
