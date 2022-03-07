<?php
session_start();
include('./config/paths.php');
include('./config/sql.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylesheetPath; ?>index.css">
    <link rel="stylesheet" href="<?php echo $stylesheetPath; ?>main.css">
    <!--<link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">-->
    <script src="https://kit.fontawesome.com/4c9c1eb731.js" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>
    <?php include($templatesPath . 'header.php'); ?>

    <main>
        <h1>Les fruits du démons</h1>
    </main>
    
    <?php include($templatesPath . 'footer.php'); ?>
</body>

</html>