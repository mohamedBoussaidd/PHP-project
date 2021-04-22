<?php require_once dirname(__FILE__) . "/../src/traitement-edition-profil.php"; ?>

<h1 class="text-center">EDITION DE MON PROFILE</h1>

<form action="" method="POST" style="width:60%; margin-left:20%;">
    <div class="form-column">
        <div class=" text-center">
            <div class="form-column">
                <div class="form-group">
                    <label for="Nom">Votre nom</label>
                    <input type="text" class="form-control" name="majNom" id="Nom" placeholder="Entrer votre nom" value="<?php echo $_SESSION["nom"];?>">
                </div>
                <div class="form-group">
                    <label for="Prenom">Votre Prenom</label>
                    <input type="text" class="form-control" name="majPrenom" id="Prenom" placeholder="Entrer votre prenom" value="<?php echo $_SESSION["prenom"];?>">
                </div>
            </div>
            <div class="form-column">
                <div class="form-group">
                    <label for="Email1">Votre email</label>
                    <input type="email" class="form-control" name="majEmail1" id="Email1" aria-describedby="emailHelp" placeholder="Entrer votre email"value="<?php echo $_SESSION["email"];?>">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="confirmationEmail2">Confirmation de votre email</label>
                    <input type="email" class="form-control" name="majEmail2" id="confirmationEmail2" aria-describedby="emailHelp" placeholder="Confirmer votre email">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>
        <div class=" text-center">
            <div class="form-column">
                <div class="form-group">
                    <label for="Mdp1">Votre mot de passe</label>
                    <input type="password" class="form-control" name="majMdp1" id="Mdp1" placeholder="Entrer votre mot de passe">
                </div>
                <div class="form-group">
                    <label for="confirmationMdp2">Confirmation de mot de passe</label>
                    <input type="password" class="form-control"  name="majMdp2" id="confirmationMdp2" placeholder="Confirmer votre mot de passe">
                </div>
            </div>
            <div class="form-column">
                <div class="form-group">
                    <label for="naissance">Votre date de naissance</label>
                    <input type="date" class="form-control" name="majNaissances" id="naissance">
                </div>
                <div class="form-group">
                    <label for="nomEntreprise">Nom de votre entreprise</label>
                    <input type="text" class="form-control" name="majEntreprise" id="nomEntreprise" placeholder="Quel est le  nom de votre entreprise ?">
                </div>
            </div>
            <div class="form-group">
                    <label for="secteurEntreprise">Secteur de votre entreprise</label>
                    <input type="text" class="form-control" name="majSecteur" id="secteurEntreprise" placeholder="Quel est le secteur de votre entreprise ?">
                </div>
        </div>
    </div>
    <div class="text-center">
    <button type="submit" name="majSoumis" class="btn btn-primary text-center">Mettre a jour mes informations</button>
    </div>
</form>
<div class="text-center">
    <a href="profils.php"><button type="button" class="btn btn-primary text-center">Retour a mon profil</button></a>
    </div>


<div class="mx-auto" style="width: 500px;">
    <?php
    if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erreur; ?>
        </div> <?php
                } if(isset($message)) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php
    };

    if ($reqOk) {
        header("refresh:3;url = src/deconnexion.php");
    } ?>
</div>