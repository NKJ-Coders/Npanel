<?php
class Reference extends General {
   
    public function  __construct($action){ 
        if(isset($action) ){

          if(isset($_GET['type']) && !empty($_GET['type'])) {
            $type = ucfirst($_GET['type']);
          }

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
          
         
          //Chargement des données par defaut
          // if(!isset($data)){
          //   $data=$this->AllData($action);
          // }
        
          //racine fichier view
          $root=$this->getRoot_file_to_include($action,'view');
          // affichage de la vue
          require_once($this->getView($action));
         
      }//Fin action

    }

   

   private function getParam(){
      extract($_POST);
      $param=[];

      if($_GET['type']=='Client' || $_GET['type']=='Partenaire') {
         $nom=str_replace("'", "\'", htmlspecialchars($nom)); 
         $param[0]['col']='type';
         $param[0]['val']=trim($_GET['type']);
         $param[1]['col']='nom';
         $param[1]['val']=$nom;
         $param[2]['col']='site_web';
         $param[2]['val']=htmlspecialchars(trim($site_web));
         $param[3]['col']='online';
         $param[3]['val']=0;
      }
      if($_GET['type'] == 'Chiffre') {
         $nom=str_replace("'", "\'", htmlspecialchars($nom)); 
         $param[0]['col']='type';
         $param[0]['val']=trim($_GET['type']);
         $param[1]['col']='nom';
         $param[1]['val']=$nom;
         $param[2]['col']='chiffre';
         $param[2]['val']=(int)$chiffre;
      }
      
      return $param;
   }


}