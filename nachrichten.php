<?php
$db = new
PDO("mysql:host=localhost;dbname=kxd_firma;charset=utf8mb4", "root", "");

$ergebnis = $db->query("SELECT * FROM nachrichten ORDER BY erstellt_am DESC");
echo "<h1>Eingegangene Nachrichten</h1>";

foreach ($ergebnis as $zeile) {
    echo "<p><strong>" . 
    htmlspecialchars($zeile["name"]) . "</strong> (" . 
    htmlspecialchars($zeile["email"]) . ") am " . $zeile["erstellt_am"] . ":<br>" . 
    htmlspecialchars($zeile["nachricht"]) . "</p>";
    }
    ?>