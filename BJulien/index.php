<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="css/style.css" />
        </head>
        <header>
            <table>
                <tr>
                    <td>Adresse e-mail ou mobile</td>
                    <td>Mot de passe</td>
                </tr>
                <tr>
                    <form  method="post" action="connexion.php">
                        <td><input type="text" name="login" placeholder="Votre login"></td>
                        <td><input type="text" name="password" placeholder="Votre mot de passe"></td>
                        <td><input class ="connexion" type="submit" name="conexion" value="Connexion"></td>
                    </form>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="#" class="linkheader">Informations de compte oubliées ?</a>
                </tr>
            </table>
        </header>
        <body>
            <h1>Inscription</h1>
            <h2>C'est gratuit (et ça le restera toujours)<h2>
            <form method="post" action="inscription.php">
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom de famille"></br>
                <input type="text" class="double" name="numMail" placeholder="Numéro de mobile ou email"></br>
                <input type="text" class="double" name="confirmation" placeholder="Confirmer numéro de mobile ou email"></br>
                <input type="text" class="double" name="npassword" placeholder="Nouveau mot de passe"></br>
                <h5>Date de naissance<h5>
                <select name="jour">
                    <option value="">Jour</option>
                    <?php 
                        for ($i=1; $i<=31; $i++){
                            echo '<option value="',$i,'"','>',$i,'</option>';
                        }
                    ?>
                </select>
                <select name="mois">
                    <option value="">Mois</option>
                    <?php 
                        for ($i=1; $i<=12; $i++){
                            echo '<option value="',$i,'"','>',$i,'</option>';
                        }
                    ?>
                </select>
                <select name="annee">
                    <option value="">Année</option>
                    <?php 
                        for ($i=1900; $i<=date('Y'); $i++){
                            echo '<option value="',$i,'"','>',$i,'</option>';
                        }
                    ?>
                </select>
                <a href="#" class="linkbody">Pourquoi indiquer ma date de naissance ?</a></br>
                </br>
                <input type="radio" name="sexe" value="Femme">Femme
                <input type="radio" name="sexe" value="Homme">Homme
                <h5 class="conditions">
                    En cliquant sur inscription, vous acceptez nos <a href="#">Conditions</a> et </br>
                    indiquez que vous avez lu notre <a href="#">Politique d'utilisation des </br> données</a>
                    , y compris notre <a href="#">Utilisation des cookies</a>. Vous </br>
                    pourrez recevoir des notifications par texto de la part de </br>
                    Facebook et pouvez vous désabonner à tout moment. </br>
                </h5>
                <input class="inscription" type="submit" name="inscription" value="Inscription"></td>
            </form>
        </body>
    </html>