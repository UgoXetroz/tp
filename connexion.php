<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=connexion', 'root', 'root');
    print "MySQL connecté !";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$passwordHashed = password_hash($_POST['motdepasse'], PASSWORD_ARGON2I);

// Ne fonctionne pas car non préparé !
//$dbh->query("INSERT INTO users(firstname, lastname, email, password) VALUES (" . $_POST['prenom'] . ",'Test','test@test.fr','test')");

// Fonctionne car préparé
// Create - Création
$query = $dbh->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES (:prenom, :nom, :email, :motdepasse)");
$query->execute(['prenom' => htmlspecialchars($_POST['prenom']), 'nom' => htmlspecialchars($_POST['nom']), 'email' => base64_encode(htmlspecialchars($_POST['email'])), 'motdepasse' => $passwordHashed]);

// Redirection en php
header("location: /index.php");