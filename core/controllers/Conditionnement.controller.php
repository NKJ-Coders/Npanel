<?php
class conditionnement extends General {
   


   
    public function  __construct($action){

        if(isset($action) ){
         
         
         if(isset($_GET['saction'])){
                
            $saction=$_GET['saction'];

            //Add
            if( $saction=="add"){
              //définition de param
              $param=$this->getParam();
              // eviter les doublons sur le nom de photo
              if(empty($this->getAllByParam($action,$param))){
               $resultat=$this->Add($action,$param); 
             }else{
              $resultat=0;
             }
              
              $msg=$this->getMsg($resultat);

             }//if( $saction=="add"){
             /*** Fin Add ***/
          
            if (isset($_GET['id']) ){
                  // SS theme
                   $id = $_GET['id'];
              //Changement de statut
              $this->ChangerStatut($action,$saction,$id);
            
                   // $data=$this->BanniereOnly($id);
            }//FIn id

          }// fin existe saction        
             
            // affichage de la vue
           // chargement des data
         $data=$this->AllData($action);
          require_once($this->getView());
         
      }//Fin action

    }
private function getParam(){
    extract($_POST);              
    $param[0]['col']='nom';
    $param[0]['val']=ucfirst($nom);


  return $param;
}

 
 



}