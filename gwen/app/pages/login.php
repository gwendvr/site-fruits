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
                    <h1>Connectez-vous :</h1>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#"><u>Mot de passe oublié</u></a>
                    <div class="button">
                        <a href="#">Connexion</a>
                    </div>
                </form>
            </div>
            <div class="change-form-container">
                <div class="change-form">
                    <div class="panel">
                        <h1>Vous êtes nouveau ?</h1>
                        <div class="panel-text">
                            <p>Inscrivez-vous sur notre site de fruits du démons !</p>
                            <p>Vous pourrez bénéficier de la notation de nos produits !</p>
                        </div>
                        <div class="buttons">
                            <div class="button">
                                <a href="<? echo $rootPath; ?>/pages/signin.php" class="change">s'inscrire</a>
                            </div>
                            <div class="button margin">
                                <a href="<? echo $rootPath; ?>/index.php" class="change">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>