<?php
require_once('connexionPdo.php');
    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['numMail']) && isset($_POST['confirmation']) && isset($_POST['npassword']) && isset($_POST['jour']) && isset($_POST['mois']) && isset($_POST['annee'])
    && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['numMail']) && !empty($_POST['confirmation']) && !empty($_POST['npassword']) && !empty($_POST['jour']) && !empty($_POST['mois']) && !empty($_POST['annee'])
    && $_POST['numMail']==$_POST['confirmation']){
        global $pdo;
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $numMail=$_POST['numMail'];
        $password=$_POST['npassword'];
        $datenaissance=$_POST['annee']."-".$_POST['mois']."-".$_POST['jour'];
        $sexe=$_POST['sexe'];
        $requete = "INSERT INTO testuballers (prenom, nom, numMail,password, datenaissance, sexe ) VALUES ('$prenom', '$nom', '$numMail', '$password', '$datenaissance', '$sexe')";
        $prep = $pdo->prepare($requete);
        $prep->execute();
    }
    else{
        header ('location: index.php');
    }
?>

<!doctype html>
    <html>
        <body>
            <?php echo"<h1>Merci pour votre inscription ".$prenom." ".$nom."</h1>"?></br>
            <h3>Veuillez vous connecter</h3></br><br>
            <a href="index.php">Connexion</a>
        </body>
    </html>