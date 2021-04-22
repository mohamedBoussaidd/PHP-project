<?php

require_once dirname(__FILE__) . "/../class/Bd.php";

if (isset($_POST["soumisInscription"])) {

    if (
        !empty($_POST["nom-inscription"]) &&

        !empty($_POST["prenom-inscription"]) &&

        !empty($_POST["email-inscription"]) &&

        !empty($_POST["email2-inscription"]) &&

        !empty($_POST["mdp-inscription"]) &&

        !empty($_POST["mdp2-inscription"])
    ) {

        /* recuperation des données du formulaire */

        $nom_i = htmlspecialchars($_POST["nom-inscription"]);

        $prenom_i = htmlspecialchars($_POST["prenom-inscription"]);

        $email_i = htmlspecialchars($_POST["email-inscription"]);

        $email2_i = htmlspecialchars($_POST["email2-inscription"]);

        $mdp_i = htmlspecialchars($_POST["mdp-inscription"]);

        $mdp2_i = htmlspecialchars($_POST["mdp2-inscription"]);

        /* verification */
        $nomTaille = strlen($nom_i);
        $prenomTaille = strlen($prenom_i);
        
        /* connection a la BDD par class */
        $conecteurParClass = new Bd();
        $connexionParClass = $conecteurParClass->getConnection();

        if ($nomTaille && $prenomTaille <= 255) {

            if ($email_i == $email2_i) {

                if (filter_var($email_i, FILTER_VALIDATE_EMAIL )){
                    $reqEmail = $connexionParClass->prepare("SELECT * FROM utilisateur WHERE email = ?");
                    $reqEmail->execute(array($email_i));
                    $emailExiste = $reqEmail->rowCount();
                    if ($emailExiste == 0) {
                        if ($mdp_i == $mdp2_i) {

                            /* preparation et insertion dans la BDD
                             */

                            $insert = $connexionParClass->prepare(

                                "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe)
                         VALUES ('$nom_i', '$prenom_i', '$email_i', '$mdp_i')"
                            );

                            $reussie = $insert->execute();

                            /* je verifie si l'ajout a bien ete effectuer */

                            if ($reussie) {
                                $message = "Votre inscription est enregistrer ";
                            } else {
                                $message = "l'inscription a échouér";
                            }

                        } else {
                            $erreur = "vos mot de passe ne sont pas les memes ";
                        }
                    } else {
                        $erreur = "l'adresse email est deja utiliser";
                    }
                } else {
                    $erreur = "votre email n'est pas valide'";
                }
            } else {
                $erreur = "vos email ne sont pas les memes";
            }
        } else {
            $erreur = "votre Nom ou Prenom ne doit pas depasssée 255 caractere";
        }
    }else{
        $erreur = "tout les champs doivent etre remplis";
    }
}
