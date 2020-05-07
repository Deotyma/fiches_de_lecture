<?php
require_once 'inc/init.php';
require_once 'inc/header.php';

debug($_SESSION);

if(!isConnected()){
    header('location:connexion.php');
    exit;
}

echo 'Bonjour ' . $_SESSION['membre']['prenom'] . ' ' . $_SESSION['membre']['nom'] . '!';

require_once 'inc/footer.php';