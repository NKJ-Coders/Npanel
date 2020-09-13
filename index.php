<?php

session_start();
require_once("core/controllers/Routeur.controller.php");
require_once("core/models/function.php");
$routeur= new Routeur();
if(isset($_GET['action'])){
    $routeur->route($_GET['action']);
}else{
    $routeur->route("Accueil");
}
