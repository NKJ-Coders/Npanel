<?php
//session_start();
class erreur404{
    private $_view;// vue qui affiche

    public function  __construct($action){

        if(isset($action)){
                
           
           
            // Vue accueil
            require_once($this->getView());
        }
    }
    public function setView(){
 
      
            $this->_view="core/views/Panessit.view.php";
      
       

    }

    public function getView(){
             $this->setView();
        return $this->_view;
    }


     


}
