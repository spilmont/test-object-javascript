<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "cliient_lefauxsite";

$conn = new mysqli($serverName,$userName,$password);

if($conn->connect_error){
    die("connted failed : ".$conn->connect_error);
}else{
    $conn->select_db($dbname);
    echo "cc";
}



$email = filter_var($_POST['$_POST["email"'],FILTER_SANITIZE_EMAIL);
$emailV = filter_var($_POST['$_POST["emailV"'],FILTER_SANITIZE_EMAIL);

if (!empty($email) == !empty($emailV)){

    echo "cc";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  include "header.php"; ?>
<form action="inscription.php" method="post">
    <label for="pseudo"> nom d'utilisateur </label><input type="text" class="formulaire" id="pseudo" name="pseudo"><br>
    <label for="nom"> nom </label><input type="text" id="nom" class="formulaire" name="nom"><br>
    <label for="prenom"> prenom </label><input type="text" id="prenom" class="formulaire" name="prenom"><br>
    <label for="email"> email </label><input type="email" id="email" class="formulaire" name="email"><br>
    <label for="emailV">reentrer l'email</label><input type="email" id="emailV" class="formulaire" name="emailV"><br>
    <label for="mdp">mot de passe</label><input type="password" id="mdp" class="formulaire" name="mdp"><br>
    <label for="mdpV">reentrer mot de passe</label><input type="password" id="mdpV" class="formulaire" name="mdpV"><br>
    <input type="submit" name="enregistrer" id="enregistrer" value="enregistrer">
</form>

<?php include "footer.php"; ?>
</body>
</html>