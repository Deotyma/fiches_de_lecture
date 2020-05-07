<?php
    require_once 'inc/init.php';
debug($_POST);

 if(!empty($_POST)){

    if(!isset($_POST['pseudo'])|| strlen($_POST['pseudo'])<6 || strlen($_POST['pseudo'])>20){
        $content .='<p class="alert-danger"> Le pseudo doit avoir entre 6 et 20 caracteres.</p>';
    }//$_POST['pseudo']

    if(!isset($_POST['mdp'])|| strlen($_POST['mdp'])<8 || strlen($_POST['mdp'])>20){
        $content .='<div class="alert alert-danger">Le mot de passe doit avoir entre 8 et 20 caracteres.</div>';
    }//$_POST['mdp']

    if(!isset($_POST['prenom']) || strlen($_POST['prenom'])<2 || strlen($_POST['prenom'])> 20 ){
        $content .='<div class="alert alert-danger">Le prenom doit avoir entre 2 et 20 caracteres.</div>';

    }//$_POST['prenom']

    if(!isset($_POST['nom']) || strlen($_POST['nom'])<2 || strlen($_POST['nom'])> 20 ){// message si contenu n'existe pas oi est trop longuo trop court
        $content .='<div class="alert alert-danger">Le prenom doit avoir entre 2 et 20 caracteres.</div>';

    }//$_POST['nom']

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $content .='<div class="alert alert-danger">L\'email n\'est pas valide</div>';
    }// end mail

    if(empty ($content)){
        $resultat = executeRequest("SELECT * FROM membres WHERE pseudo = :pseudo", array(':pseudo' => $_POST['pseudo']));

        if($resultat->rowCount() > 0){
            $content .='<div class="alert-danger">le pseudo est indisponible veuillez en choisir un autre.</div>';
        }else{
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            $success = executeRequest("INSERT INTO membres(nom, prenom, pseudo, email, mdp, statut) VALUES(:nom, :prenom, :pseudo, :email, :mdp, 0)", array(
                ':nom'=> $_POST['nom'],
                ':prenom'=> $_POST['prenom'],
                ':pseudo'=> $_POST['pseudo'],
                ':email'=> $_POST['email'],
                ':mdp'=> $mdp
            ));

            if($success){//
                $content .= '<div class = " alert-success">Vous êtes inscrit. Pour vous connecter <a href="connexion.php">cliquez ici</a>.</div>';
            }else{
                $content .='<div class="alert alert-danger">L\'erreur est survenu lors de l\'enregistrement...</div>';
            }
        }


    }//end if(empty ($content))


} //end of if(!empty($_POST))

    require_once 'inc/header.php';
    
?>



<div class="content container">

 
    <form class="formulaire" method="post">
    <h1 class = "entete">L'Inscription</h1>

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

            <div><input type="text" name="prenom" id="prenom" value="<?php echo $_POST['prenom'] ?? '';  ?>"></div>
            <div><label for="prenom">Prénom</label></div>

        </div>
        <div class="form-group">

            <div><input type="text" name="nom" id="nom" value="<?php echo $_POST['nom'] ?? '';  ?>"></div>
            <div><label for="nom">Nom</label></div>

        </div>
        <div class="form-group">

        <div><input type="text" name="email" id="email" value="<?php echo $_POST['email'] ?? '';  ?>"></div>
        <div><label for="email">Email</label></div>

        </div>

        <div class="form-group">
		<input type="submit" value="S'inscrire" class="btn">
	    </div>
        

    </form>

    <div class="film">

    <video loop autoplay muted width="250">

        <source src="video/book2.mp4"
                type="video/mp4">

                Votre navigateur ne prend pas en charge les vidéos HTML5.
     </video>


    </div>

</div>


<?php
    require_once 'inc/footer.php';
