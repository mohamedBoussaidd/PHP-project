<div class="row">
    <div class="col-sm-3">
        <a class="btn btn-primary" href="edition-profils.php" role="button">Editer mon profil</a>
    </div>
    <div class="col-sm-6 text-center">
        <h1 class="">MA FACTURE</h1>
    </div>
    <div class="col-sm-3 text-right">
        <a class="btn btn-danger" href="src/deconnexion.php" role="button">Deconnexion</a>
    </div>
</div>

<!-- CONNEXION -->
<div class="mx-auto" style="width: 500px;">
    <div class="form">
        <h1>Mon profil</h1>
        <p> NOM : <?php echo $_SESSION["nom"]; ?></p>
        <p> PRENOM : <?php echo $_SESSION["prenom"]; ?></p>
        <p> EMAIL : <?php echo $_SESSION["email"]; ?></p>
    </div>
</div>
<br><br>

<div class="text-center">
    <a href="formulaire.php"><button type="button" class="btn btn-primary text-center">Crée ma facutre</button></a>
</div>