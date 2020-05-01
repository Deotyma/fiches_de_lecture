<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes Fiches de Lecture</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- navbar -->
    <nav class="navheader">
            <!-- logo -->
            <h1 id = "logo"><a href = "<?php echo RACINE_SITE . 'index.php'; ?>"><i class="fas fa-book-open"></i>Mes Fiches</a></h1>
            <div class="menuOwerlay">
                <?php
                if(isConnected()){//si le membre est conectéecho 
                    echo'<li><a class = "nav-link" href="'.RACINE_SITE.'profil.php">Profil</a></li>';
                    echo '<li><a class = "nav-link" href="'.RACINE_SITE.'connexion.php?action=deconnexion">Se déconecter</a></li>';
                }else{// membre qui n'est pas conecté
                    echo '<a class = "nav-link" href="'.RACINE_SITE.'inscription.php">Inscription</a>';
                    echo '<a class = "nav-link" href="'.RACINE_SITE.'connexion.php">Connection</a>';
                }
                echo '<a class = "nav-link" href="'.RACINE_SITE.'favorits.php">favorits</a>';
                if(isAdmin()){// si le membre est admin
                    echo '<a class = "nav-link" href="'.RACINE_SITE.'admin/gestion_.php">Gestion du site</a>';

                    echo '<a class = "nav-link" href="'.RACINE_SITE.'admin/gestion_membres.php">Gestion des membres</a>';

                }
                ?>
            </div>
        </nav>
    

    </header>