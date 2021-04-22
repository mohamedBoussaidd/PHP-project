<?php require_once dirname(__FILE__) . "/../class/FormUtils.php"; ?>
<form action="<?php dirname(__FILE__) . "/../src/form_traitement.php"; ?>" method="POST">
    <div class="div-form">
        <div class="form">
            <h2>client</h2>
            <label for="name-c">nom</label>
            <input type="text" name="name-c" id="name-c">
            <label for="firstname-c">prenom</label>
            <input type="text" name="firstname-c" id="firstname-c">
            <label for="email-c">email</label>
            <input type="email" name="email-c" id="email-c">
        </div>
    </div>
</form>
<div class="text-center" style="width:40%; margin-left:30%;">
    <h2 class="text-center">Mes produits</h2>
    <form action="" method="POST">
        <div id="premierInput" class="form-group">
            <label for="produit"> Produit</label>
            <input type="text" class="form-control" id="produit" placeholder="Entrez votre produit">
        </div>
        <div class="">
            <button class="btn btn-primary" id="champSuplmentaire">Ajouter un produit</button>
        </div>
        <div class="form-group">

            <label for="quantité">Quantité</label>
            <input type="number" class="form-control" id="quantité" placeholder="nombre de produit vendu">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<br><br>
<div class="text-center">
    <a href="profils.php"><button type="button" class="btn btn-primary text-center">Retour a mon profil</button></a>
</div>