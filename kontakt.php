<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$nachricht = htmlspecialchars($_POST["nachricht"]);

$db = new 
PDO("mysql: host=localhost ;dbname=kxd_firma; charset=utf8mb4", "root", "");
$sql = "INSERT INTO nachrichten (name, email, nachricht) VALUES (?, ?, ?)";
$befehl = $db->prepare($sql);
$befehl-> execute([$name, $email, $nachricht]);

echo "<h1> Danke, " . $name . "! <h1>";
echo "<p> Wir melden und unter " . $email . ".</p>";
echo "<p> Ihre Nachricht: " . $nachricht . "</p>";
?>