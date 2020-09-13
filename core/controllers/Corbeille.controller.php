<?php
class Corbeille{
    private $_CorbeilleManager;
    private $_view;// la partie vu qui  affiche la formation 

   
    public function  __construct($action){
      $data=array();
        if(isset($action) ){

          // initialisation de la variable $data

          $data= array();

          // pas de type

          if(isset($_GET['saction'])){
                
            $saction=$_GET['saction'];
          
            if (isset($_GET['id']) ){
                  // SS theme
                   $id = $_GET['id'];
            
                   // $data=$this->CorbeilleOnly($id);
            }//FIn id
          }// fin existe saction        
   
            // affichage de la vue
               require_once($this->getView());
         
      }//Fin action

    }

    public function setView(){
    
               $this->_view="core/views/Panessit.view.php";            
    }

    public function getView(){

             $this->setView();
        return $this->_view;
    }



}