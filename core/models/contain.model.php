<?php
class Contain{
    
  
  
  public function getFile($action,$saction,$id,$root){
    $file_to_include='';
    if($action=="Accueil" || $action=="Connexion" || $action=="Dashboard"){

      $file_to_include="core/include/dashboard.php";

    }else{
      
     $file_to_include=$root;
          
      #Affcher la liste des enregistrements si saction n'exite ou si saction est update, add, publié, et dépublié
        
      if(empty($saction)){
        //echo $saction;
        $file_to_include.="list.php";
      }else{

          if(!empty($id)){

              if(($saction=="Add" || $saction=="PutOnline" || $saction=="PutOffline" || $saction=="Update" || $saction=="Del" )){
                $file_to_include.="list.php";
              }else{
                $saction=strtolower($saction);
                $file_to_include.="s_".$saction.".php";
              }

          }else{
            $saction=strtolower($saction);
            $file_to_include.="list.php";
          }

      }//Fin saction

    }//if($action=="Accueil" || $action=="Connexion" || $action=="Dashboard"){
    return $file_to_include;
  }

}
