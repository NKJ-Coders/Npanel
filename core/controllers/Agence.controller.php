<?php
//session_start();
class Agence{
    private $_view;// vue qui affiche

    public function  __construct($action){

        if(isset($action)){
                
           
           
            // Vue accueil
            require_once($this->getView());
        }
    }

}
