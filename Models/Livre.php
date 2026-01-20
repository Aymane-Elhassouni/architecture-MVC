<?php

class Livre{
    private int $id;
    private string $titre;
    private string $description;
    private string $ISBAN;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of ISBAN
     */ 
    public function getISBAN()
    {
        return $this->ISBAN;
    }

    /**
     * Set the value of ISBAN
     *
     * @return  self
     */ 
    public function setISBAN($ISBAN)
    {
        $this->ISBAN = $ISBAN;
    }
}