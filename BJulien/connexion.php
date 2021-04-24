<?php
require_once('connexionPDO.php');
    if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login'])&& !empty($_POST['password'])) {
        global $pdo;
        $query = "SELECT * FROM testuballers where numMail=:login and password=:password";
        $prep = $pdo->prepare($query);
        $prep->bindValue(':login', $_POST['login']);
        $prep->bindValue(':password', $_POST['password']);
        $prep->execute();
        if($prep->rowCount() == 1){
            $result = $prep->fetch();
        }

        if($result){
            session_start ();
            // print_r($result);
            $_SESSION['prenom'] = $result->prenom;
            $_SESSION['nom'] = $result->nom;
        }

        else{
            header ('location: index.php');
        }
    }

    else {
    header ('location: index.php');
    }
?>

<?php echo "<h1>Bon retour parmis nous ".$_SESSION['prenom']." ".$_SESSION['nom']."</h1>";?>
<!doctype html>
    <html>
        <a href="deconnexion.php">Déconnexion</a>
    <html>


