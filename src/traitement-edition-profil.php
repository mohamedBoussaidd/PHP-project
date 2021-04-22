<?php

require_once dirname(__FILE__) . "/../class/Bd.php";


if (isset($_SESSION["id"])) {

    if (isset($_POST["majSoumis"])) {

        if (
            !empty($_POST["majNom"])
            && !empty($_POST["majPrenom"])
            && !empty($_POST["majEmail1"])
            && !empty($_POST["majEmail2"])
            && !empty($_POST["majMdp1"])
            && !empty($_POST["majMdp2"])
            && !empty($_POST["majEntreprise"])
        ) {
            /* recuperation et securiser des donnéé de connexion */

            $idUser = $_SESSION["id"];

            $majNom = htmlspecialchars($_POST["majNom"]);
            $majPrenom = htmlspecialchars($_POST["majPrenom"]);
            $majEmail1 = htmlspecialchars($_POST["majEmail1"]);
            $majEmail2 = htmlspecialchars($_POST["majEmail2"]);
            $majMdp1 = $_POST["majMdp1"];
            $majMdp2 = $_POST["majMdp2"];
            $majSecteur = htmlspecialchars($_POST["majSecteur"]);
            $majNaissances = htmlspecialchars($_POST["majNaissances"]);
            $majEntreprise = htmlspecialchars($_POST["majEntreprise"]);

            if ($majEmail1 == $majEmail2) {

                if ($majMdp1 == $majMdp2) {


                    /* connexion a la BDD,preparation et execution de la requete sql  */

                    $connecteur = new Bd();

                    $connexionBd = $connecteur->getConnection();

                    $reqMaj = $connexionBd->prepare("UPDATE utilisateur SET nom = '$majNom',prenom = '$majPrenom', email = '$majEmail1', mot_de_passe = '$majMdp1', naissances = '$majNaissances',nomentreprise = '$majEntreprise',secteurentreprise = '$majSecteur' WHERE id = $idUser");
                    $reqOk = $reqMaj->execute();

                    if ($reqOk) {
                        $message = "vos modification on bien ete prise en compte";
                    } else {
                        $erreur = "nous somme desole votre enregistrement n'as pas pu etre traiter";
                    }
                } else {
                    $erreur = "vos mot de passes sont differents";
                }
            } else {
                $erreur = "vos email sont differents";
            }
        } else {
            $erreur = "tout les champs doivent etre remplis";
        }
    }
} else {
    header("refresh:3 url = index.php");
}
