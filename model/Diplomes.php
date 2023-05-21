<?php
require_once("./config.php");

class Diplomes
{
    private $connection;

    /**
     * Constructor - Connect to the database.
     */
    public function __construct()
    {
        try {
            // Connect to the database.
            $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE_NAME, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            // Send an error because it could not connect to the database.
            throw new Exception($e->getMessage());
        }
    }

    /**
     * searchDiplomes
     *
     * @return un tableau de diplomes
     */
    public function searchDiplomes($limit, $offset)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM certificat
                                            LIMIT $limit
                                            OFFSET $offset");
            $stmt->execute();
            $diplomes = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $diplomes;
        } catch (Exception $e) {
            throw $e;
        };
    }

    /**
     * readDiplome
     *
     * @param  mixed $id
     * @return un diplome
     */
    public function readDiplome($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM certificat WHERE id = :id");
            $stmt->execute(array(':id' => $id));
            $diplome = $stmt->fetch(PDO::FETCH_OBJ);
            return $diplome;
        } catch (Exception $e) {
            throw $e;
        };
    }
}
