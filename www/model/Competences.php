<?php

class Competences
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
     * searchCompetences
     *
     * @return un tableau de competences
     */
    public function searchCompetences($limit, $offset)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM competences
                                            LIMIT $limit
                                            OFFSET $offset");
            $stmt->execute();
            $competences = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $competences;
        } catch (Exception $e) {
            throw $e;
        };
    }

    /**
     * readComp
     *
     * @param  mixed $id
     * @return un Comp
     */
    public function readCompetence($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM competences WHERE id = :id");
            $stmt->execute(array(':id' => $id));
            $competence = $stmt->fetch(PDO::FETCH_OBJ);
            return $competence;
        } catch (Exception $e) {
            throw $e;
        };
    }
}
