<?php require_once dirname(__FILE__) . "/../class/FormUtils.php"; ?>
<?php require_once dirname(__FILE__) . "/../src/traitement-connexion.php"; ?>


<div class="div-center">
    <h1 class="center">MA FACTURE</h1>
</div>
<!-- CONNEXION -->
<form action="" method="POST">
    <div class="mx-auto" style="width: 500px;">
        <div class="form">
            <h1>CONNEXION</h1>
                <?php FormUtils::input("email", "Votre Email", "connexion email", "email"); ?>
                <?php FormUtils::input("password", "Votre mot de passe", "password", "mdp"); ?>
                <br>
            <div class="mx-auto" style="width: 150px;">
                <input class="btn btn-primary" type="submit" name="soumis" value="Me connecter">
            </div>
        </div>
    </div>
</form>
<div class="mx-auto" style="width: 500px;">
        <div class="form">
            <p >Je souhaite<button type="button" class="btn btn-link"><a href="inscription.php">M'INSCRIRE</a></button></p>
        </div>
</div>
<div class="mx-auto" style="width: 500px;">
    <?php
    if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erreur; ?>
        </div> <?php
                } 
                if(isset($message)) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php
    };
;?>
</div>
