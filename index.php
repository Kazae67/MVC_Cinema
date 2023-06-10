<?php
require_once 'app/controllers/CinemaController.php';
require_once 'app/models/Connect.php';
include 'app/views/templates/header.php';

use Controller\CinemaController;
$ctrlCinema = new CinemaController();

spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});


if(isset($_GET["action"])){
    switch ($_GET["action"]){
        case "listFilms" : $ctrlCinema->listFilms(); break;
    }
}

include 'app/views/listFilms.php';
include 'app/views/templates/footer.php';
?>
