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
        <nav class="navIndex">
            <h1 id = "logo"><a href = "index.php"><i class="fas fa-book-open"></i>Mes Fiches</a></h1>
            <img src="img/menu.svg" alt="icône menu" class="icone">
        </nav>

        <section class = "bienvenue">
            <div class="banniere">
                <img src="img/books.jpg" alt="l'étagere avec des livres" >
            </div>
            <div class="titreDesc">
            <h1 class="titre">
                <span class="lettres">B</span>
                <span class="lettres">i</span>
                <span class="lettres">e</span>
                <span class="lettres">n</span>
                <span class="lettres">v</span>
                <span class="lettres">e</span>
                <span class="lettres">n</span>
                <span class="lettres">u</span>
                <span class="lettres">e</span>
                &nbsp;
                <span class="lettres">!</span>
            </h1>
        </div>
       </section>

       <!-- menu rideau -->
       <div id="myNav" class="overlay">
           <a href="#" class="closeBtn">&times;</a>
           <div class="overlayContent">
               <a href="index.php">à propos</a>
               <a href="fiches.php">les fiches</a>
               <a href="connexion.php">se connecter</a>
               <a href="inscription.php">s'inscrire</a>
           </div>

       </div>


    </header>


   
    <?php
    require_once 'inc/footer.php';