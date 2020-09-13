<?php
class Message{
    private $_MessageManager;
    private $_view;// la partie vu qui  affiche la formation 

   
    public function  __construct($action){
      $data=array();
        if(isset($action) ){

          // initialisation de la variable $data

          $data= array();
		  
		  if(($_GET['type'] == 'Message') || ($_GET['type'] == 'Commande')){

                $type = ucfirst($_GET['type']); 

                // recuperation les enregistrement non supprimés  en fonction du type
                // $data = $this->AllPrestation($type);
          }

        }else{// si type n'existe pas

            //recupérer les enregistremnts non supprimés
             //$data = $this->AllPrestation($type);


        }// fin type


          if(isset($_GET['saction'])){
                
            $saction=$_GET['saction'];
          
            if (isset($_GET['id']) ){
                  // SS theme
                   $id = $_GET['id'];
            
                   // $data=$this->PrestationOnly($id);
            }//FIn id
          }// fin existe saction        
   
            // affichage de la vue
               require_once($this->getView());
         
      }//Fin action

    public function setView(){
    
               $this->_view="core/views/Panessit.view.php";            
    }

    public function getView(){

             $this->setView();
        return $this->_view;
    }



}