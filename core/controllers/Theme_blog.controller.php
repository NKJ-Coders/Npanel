<?php
class Theme_blog extends General {
   
    public function  __construct($action){ 
        if(isset($action) ){

          //Root fille definition
          $root=$this->getRoot_file_to_include($action,'controller');

          //contraint evaluation
          $fil_contraint=$root.'contraint.php';
           if(file_exists( $fil_contraint)){
              require_once( $fil_contraint);
           }else{
              header("Location:index.php?action=Error404");
           }
           //gestion des operations: add, detail, ...
           if(!empty($saction)){
              $file_operation=$root.'operation.php';
               if(file_exists($file_operation)){
                  require_once($file_operation);
               }else{
                  header("Location:index.php?action=Error404");
               }

           }//Fin !empty($saction))
          
         
        //   Chargement des données par defaut
          if(!isset($data)){
            $data=$this->AllData($action);
          }
        
          //racine fichier view
          $root=$this->getRoot_file_to_include($action,'view');
          // affichage de la vue
          require_once($this->getView($action));
         
      }//Fin action

    }

private function getParam(){
    extract($_POST);
    $titre=str_replace("'", "\'", $titre); 
   //  $resume=str_replace("'", "\'", $resume);
    $param[0]['col']='titre';
    $param[0]['val']=$titre;
    $param[1]['col']='online';
    $param[1]['val']=0;
  
    return $param;
}


}