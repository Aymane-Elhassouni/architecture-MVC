<?php

class Auteur{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $dateNaissance;
    private PDO $connection;
    public function __construct(){
        $connection = new Database();
        $this->connection = $connection->connection();
    }
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

    
    public function getFirstname()
    {
        return $this->firstname;
    }

    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    
    public function getLastname()
    {
        return $this->lastname;
    }

    
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

     
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

     
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function findAll(){
        $sql = "SELECT * FROM auteurs";
        $stmt =$this->connection->prepare($sql);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS,Auteur::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function toArray() {
        return [
            'id'            => $this->id,
            'firstname'     => $this->firstname,
            'lastname'      => $this->lastname,
            'dateNaissance' => $this->dateNaissance
        ];
    }
}