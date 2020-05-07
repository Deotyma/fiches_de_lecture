<?php
require_once 'inc/init.php';

$message = '';
//debug($_POST);
//deconexion
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion'){
    unset($_SESSION['membre']);

    $message='<div class ="alert-info">Vous êtez déconnecté</div>';
}

if(isConnected()){
    header('location:profil.php');
    exit;
}

// connexion
if(!empty($_POST)){
    if(empty($_POST['pseudo']) || empty($_POST['mdp'])){// si un ou l'autre est vide
        $content .='<p class="alert-danger">Les identifiants sont obligatoires</p>';
    }

    if(empty($content)){
        $resultat = executeRequest("SELECT * FROM membres WHERE pseudo = :pseudo", array(':pseudo'=> $_POST['pseudo']));

        if($resultat -> rowCount() == 1){
            $membre = $resultat->fetch(PDO::FETCH_ASSOC);
            debug($membre);
            if(password_verify($_POST['mdp'], $membre['mdp'])){
                $_SESSION['membre'] = $membre;
                header('location:profil.php');
                exit;
            }else{
                $content .='<div class="alert-danger">Mot de passe erroné.</div>';
            }

        }else{
            $content .='<div class="alert alert-danger">Pseudo erroné!</div>';
        }

    }// end if(empty($content))
}// end if !emptu($_POST)

require_once 'inc/header.php';
echo $message;
echo $content;
?>

<div class="content container">
<form class="formulaire" method="post">
    <h1 class = "entete">Connexion</h1>

    <?php echo $content; ?>

        <div class="form-group">

            <div><input type="text" name="pseudo" id="pseudo" value="<?php echo $_POST['pseudo'] ?? '';  ?>"></div>
            <div><label for="pseudo">Pseudo</label></div>

        </div>
        <div class="form-group">

            <div><input type="password" name="mdp" id="mdp" value="<?php echo $_POST['mdp'] ?? '';  ?>"></div>
            <div><label for="mdp">Mot de passe</label></div>

        </div>

        <div class="form-group">
		<input type="submit" value="Se connecter" class="btn">
        </div>
        
  </form>    
  
  <div class="film">
      

<video loop autoplay muted width="250">

    <source src="video/book1.mp4"
            type="video/mp4">

            Votre navigateur ne prend pas en charge les vidéos HTML5.
 </video>
  </div>

</div>



<?php
require_once 'inc/footer.php';