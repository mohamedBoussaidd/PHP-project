<?php
require_once dirname(__FILE__) . "/../class/Utils.php";
/**
 * recupere les donner entree dans le formulaire.
 * 
 */
if (!empty($_POST)) {

    /* RECUPE DES DONNEE VENDEUR */
    $name_v = ($_POST["name-v"]);
    $email_v = ($_POST["email-v"]);
    $firstname_v = ($_POST["firstname-v"]);

    /* RECUPE DES DONNEE CLIENT */
    $name_c = ($_POST["name-c"]);
    $email_c = ($_POST["email-c"]);
    $firstname_c = ($_POST["firstname-c"]);

    /* RECUPE DES DONNEE DES PRODUITS */
    // 1
    $name_p = $_POST["name_p"];
    $p_produit = $_POST["prix_p"];
    $quantite_p = $_POST["quantite_p"];
    // 2
    $name_p2 = $_POST["name_p2"];
    $p_produit2 = $_POST["prix_p2"];
    $quantite_p2 = $_POST["quantite_p2"];
    // 3
    $name_p3 = $_POST["name_p3"];
    $p_produit3 = $_POST["prix_p3"];
    $quantite_p3 = $_POST["quantite_p3"];
    // 4
    $name_p4 = $_POST["name_p4"];
    $p_produit4 = $_POST["prix_p4"];
    $quantite_p4 = $_POST["quantite_p4"];
    // 5
    $name_p5 = $_POST["name_p5"];
    $p_produit5 = $_POST["prix_p5"];
    $quantite_p5 = $_POST["quantite_p5"];
    /* LES TOTAUX */
    $total_p = Utils::multiple($p_produit, $quantite_p);
    $total_p2 = Utils::multiple($p_produit2, $quantite_p2);
    $total_p3 = Utils::multiple($p_produit3, $quantite_p3);
    $total_p4 = Utils::multiple($p_produit4, $quantite_p4);
    $total_p5 = Utils::multiple($p_produit5, $quantite_p5);
    /* LE TOTAL DE TOUTE LA COMMANDE */
    $total = Utils::sum($total_p, $total_p2,$total_p3, $total_p4, $total_p5);

}