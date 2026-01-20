<?php

class AuteurController{
    public function index(){
        $model = new Auteur();
        $auteur = $model->findAll()->toArray();
        return require_once __DIR__ . '/../Views/AuteurViewPage.php';
    }
    public function create(){
        $sql = 'INSERT INTO auteurs (firstname,lastname,dateNaissance) VALUES (?,?,?)';
        $stmt = prepare($sql);
        $stmt->bindParam(1,$firstname,PDO::PARAM_STR);
        $stmt->bindParam(2,$lastname,PDO::PARAM_STR);
        $stmt->bindParam(3,$dateNaissance,PDO::PARAM_STR);
        $stmt->execute();
    }
    public function update(){

    }
}