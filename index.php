<?php
include 'Database/Database.php';
include 'Models/Auteur.php';
include 'Controllers/AuteurController.php';

// echo '<pre>';
// $data = new Database();
// var_dump($data->connection());

// echo '</pre>';


switch($_SERVER["REQUEST_URI"]){
    case '/home' :
        echo 'this is home';
    case '/auteur' :
        $auteur = new AuteurController();
        echo '<pre>';
        var_dump($auteur->index());
        echo '</pre>';
    break;
    /* case '/AuteurViewPage':
        $auteur = new AuteurController();
        echo '<pre>';
        var_dump($auteur->index());
        echo '</pre>';
    break; */
}