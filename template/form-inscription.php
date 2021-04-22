<?php require_once dirname(__FILE__) . "/../class/FormUtils.php"; ?>
<?php require_once dirname(__FILE__) . "/../src/traitement-inscription.php"; ?>

<!-- INSCRIPTION -->
<div class="mx-auto" style="width: 500px;">
    <form action="" method="POST">
        <div class="form">
            <h2>Inscrivez-vous gratuitement pour crée votre premiere facture</h2>
            <?php FormUtils::input("text", "Votre Nom", "nom", "nom-inscription") ; ?>
            <?php FormUtils::input("text", "Votre Prenom", "prenom", "prenom-inscription"); ?>
            <?php FormUtils::input("email", "Votre Email", "email", "email-inscription"); ?>
            <?php FormUtils::input("email", "confirmer votre Email", "confirmer votre email", "email2-inscription"); ?>
            <?php FormUtils::input("password", "Votre mot de passe", "mot de passe", "mdp-inscription"); ?>
            <?php FormUtils::input("password", "confirmer Votre mot de passe", "confirmer votre mot de passe", "mdp2-inscription"); ?>
            <div class="div-button">
                <button class="button" name="soumisInscription" type="submit">M'inscrire</button>
            </div>
        </div>
    </form>
</div>

<div class="mx-auto" style="width: 500px;">
    <?php
    if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erreur; ?>
        </div> <?php
                } else { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php
    };

    if ($reussie) {
        header("refresh:3;url = index.php");
    } ?>
</div>