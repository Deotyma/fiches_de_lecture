<?php
require_once 'inc/init.php';
require_once 'inc/header.php';
?>
<form method="post" enctype="multipart/form-data">

<div>
<input type="hidden" name="id_livre" value="">
</div>

        <div>
            <div><input type="text" name="auteur" id="auteur" value="<?php echo $livre_actuel['auteur'] ?? '' ?>"></div>
            <div><label for="auteur">Auteur</label></div>
        </div>

        <div>
            <div><input type="text" name="titre" id="titre" value="<?php echo $livre_actuel['titre'] ?? '' ?>"></div>
            <div><label for="titre">Titre</label></div>
        </div>

        <div>
            
            <div><input type="file" name="image" id=""></div>
            <div><label>Image</label></div>
        </div>

        <div>
            <select name="gerne">
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'documentaire') echo 'selected';?> >documantaire</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'roman') echo 'selected';?>>roman</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'scientifique') echo 'selected';?>>scientifique</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'informatique') echo 'selected';?>>informatique</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'bd') echo 'selected';?>>BD</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'poesie') echo 'selected';?>>poésie</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'religion') echo 'selected';?>>religion</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'psycholgie') echo 'selected';?>>psychologie</option>
                <option <?php if(isset($livre_actuel['gerne']) && $livre_actuel['gerne'] == 'autre') echo 'selected';?>>autre</option>
            </select>
        </div>
            <div><label>Gerne</label></div>
        </div>

        <div>
        <div><textarea name="citation" id="citation"><?php echo $livre_actuel['citation'] ?? '' ?></textarea></div>
        <div><label for="citation">Citation favorie</label></div>
        </div>

        <div>
        <div><textarea name="resume" id="resume"><?php echo $livre_actuel['resume'] ?? '' ?></textarea></div>
        <div><label for="resume">Peetite résumé du livre</label></div>
        </div>

        <div>
        <div><textarea name="critique" id="critique"><?php echo $livre_actuel['critique'] ?? '' ?></textarea></div>
        <div><label for="critique">Mon avie sur le livre</label></div>
        </div>




</form>

<?php
require_once 'inc/footer.php';