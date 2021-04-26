# testUballers BERTRAND Julien

Bonjour monsieur.

Vous trouverez sur ce GitHub ces fichiers dans le dossier BJulien:
index.php
inscription.php
connexion.php
connexionPDO.php
deconnexion.php
Un dossier css contenant un fichier style.css
testuballers.sql

Une fois ces fichiers téléchargés voici la méthode sur comment lancer tout ça:

1. Télechargez Laragon ici: https://laragon.org/download/
2. Lancez le programme pour l'installer.
3. Allez dans votre dossier laragon puis www et supprimez le fichier index.
4. Télechargez PHPMyAdmin sur https://www.phpmyadmin.net/downloads/
5. Décompressez le dossier puis copiez le dans laragon/etc/apps et renommer le phpMyAdmin.
6. Déposez dans le dossier www les fichiers installez de GitHub sauf le fichier testuballers.sql
7. Sur Laragon, appuez sur Start all puis Database et vous arriverez sur la page de phpMyAdmin.
8. Entrez dans utilsateur root et laissez le mot de passe vide puis cliquez sur Exécuter.
9. Une fois sur la page principal cliquez sur Nouvelle bas de données, donnez lui comme nom "testuballers" puis appuyez sur Créer.
11. Cliquez maintenant sur Importer et choisisez le fichier testuballers.sql.
10. Cliquez sur Exécuter en bas à gauche et vous voilà avec la base de données du test.
11. Vous y trouverez un exemple d'utilisateur déjà créé.
12. Retournez sur Laragon et cliquez sur Web. Ça vous lancera la page localhost/
13. Maintenant cliquez sur index.php et vous pourrez accéder à mon travail.

Petite précision, si vous utilisez d'autres identifiants pour phpMyAdmin, il faudra aussi les modifier dans le fichier connexionPDO.php.

Temps utilisé pour chaque langage:
Html: 50 minutes.
CSS: 15 minutes.
PHP: 1h.
Mysql: 10 minutes.

Je vous souhaite une bonne journée.

Cordialement,

BERTRAND Julien
