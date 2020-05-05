<?php
require_once 'inc/init.php';
debug($_POST);
require_once 'inc/header.php';
?>

<div class="content container">
<form class="formulaire" method="post">
    <h1 class = "entete">Connexion</h1>
        <div class="form-grup">

            <div><input type="text" name="pseudo" id="pseudo" value="<?php echo $_POST['pseudo'] ?? '';  ?>"></div>
            <div><label for="pseudo">Pseudo</label></div>

        </div>
        <div class="form-grup">

            <div><input type="password" name="mdp" id="mdp" value="<?php echo $_POST['mdp'] ?? '';  ?>"></div>
            <div><label for="mdp">Mot de passe</label></div>

        </div>

        <div class="form-grup">
		<input type="submit" value="S'inscrire" class="btn">
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