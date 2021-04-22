<?php

/**
 * Classe permettant d'accéder à la BDD
 */
 class Bd
{
    // Détient l'instance PDO connectée à la BDD
    // - protected = accessible par les enfants mais depuis l'extérieur
    protected $connexion;
    // Paramètres de connexion à la BDD
    // - private pour ne pas y accéder de l'extérieur
    // - const pour éviter que les valeurs soient modifiables
    private const HOST = "localhost";
    private const DB = "ma_facture";
    private const USER = "ma facture";
    private const PASS = "Momo2204";
    private const CHARSET = "utf8mb4";

    private const DSN = "mysql:host=" . self::HOST .
                        ";dbname=" . self::DB .
                        ";charset=" . self::CHARSET;

    /**
     * On ouvre la connexion à la construction d'une instance de cette classe
     */
    public function __construct()
    {
        try {
            $this->connection = new PDO(self::DSN, self::USER, self::PASS);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Accesseur de la variable $connection
     * On implémente un mécanisme d'encapsulation :
     * On a déclaré $connection en tant que protected
     * pour qu'elle ne soit pas accessible de l'extérieur.
     * On déclare ici uniquement un accesseur, pour que tout code appelant
     * puisse uniquement récupérer notre connexion, mais pas écrire dedans
     *
     * @return PDO
     */
    public  function getConnection(): PDO
    {
        return $this->connection;
    }
}
