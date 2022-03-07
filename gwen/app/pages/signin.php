<?php
session_start();
include('../config/paths.php');
include('../config/sql.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylesheetPath; ?>login.css">
    <link rel="stylesheet" href="<?php echo $stylesheetPath; ?>main.css">
    <script src="https://kit.fontawesome.com/4c9c1eb731.js" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>
    <main>
    <div class="container">
            <div class="form">
                <form action="#">
                    <h1>Inscription au site :</h1>
                    <input type="text" placeholder="Nom" />
                    <input type="text" placeholder="Prenom" />
                    <input type="text" placeholder="Age" />
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <div class="button margin">
                        <a href="#">s'inscrire</a>
                    </div>
                </form>
            </div>
            <div class="change-form-container">
                <div class="change-form">
                    <div class="panel">
                        <h1>Vous êtes déjà inscrit ?</h1>
                        <div class="panel-text">
                            <p>Alors connectez vous juste ici !</p>
                        </div>
                        <div class="buttons">
                            <div class="button">
                                <a href="<? echo $rootPath;?>/pages/login.php" class="change">se connecter</a>
                            </div>
                            <div class="button margin">
                                <a href="<? echo $rootPath;?>/index.php" class="change">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>