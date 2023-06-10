<?php

require_once 'app/controllers/CinemaController.php';
require_once 'app/models/Connect.php';
include 'app/views/templates/header.php';
include 'app/views/templates/footer.php'; 

use Controller\CinemaController;

spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});

$ctrlCinema = new CinemaController();

if(isset($_GET["action"])){
    switch ($_GET["action"]){

        case "listFilms" : $ctrlCinema->listFilms(); break;
        case "listActeurs" : $ctrlCinema->listActeurs(); break;
    }
}