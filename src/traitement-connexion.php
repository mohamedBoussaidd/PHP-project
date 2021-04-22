<?php

session_start();
require_once dirname(__FILE__) . "/../class/Bd.php";

if (isset($_POST["soumis"])) {

    /* recuperation et securiser des donnéé de connexion */

    $email_client = htmlspecialchars($_POST["email"]);
    $mdp_client = htmlspecialchars($_POST["mdp"]);

    /* connexion a la BDD,preparation et execution de la requete sql  */

    $connecteur = new Bd();

    $connexionBd = $connecteur->getConnection();

    $reqEmailMdp = $connexionBd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mot_de_passe = ? ");

    $selectionReussie = $reqEmailMdp->execute(array($email_client, $mdp_client));

    /* preparation et execution de la recuperation des nom et prenom */

    $reqNomPrenom = $connexionBd -> prepare("SELECT nom, prenom FROM utilisateur WHERE email = '$email_client'");

    $reqReussie = $reqNomPrenom->execute();

    $userNomPrenom = $reqNomPrenom->fetch();

    // /* verification si il existe deja dans la BDD un  et un seul meme user */

    $userExist = $reqEmailMdp->rowCount();

    if ($userExist == 1) {

        $userInfo = $reqEmailMdp->fetch();
        $_SESSION["id"] = $userInfo["id"];
        $_SESSION["nom"] = $userNomPrenom["nom"];
        $_SESSION["prenom"] = $userNomPrenom["prenom"];
        $_SESSION["email"] = $userInfo["email"];
        $_SESSION["mot_de_passe"] = $userInfo["mot_de_passe"];
        header("Location: profils.php?id=" . $_SESSION["id"]);
        $message = "connexion reussie";
    } else {
        $erreur = "Vos identifients sont incorrectes";
    }
} 
