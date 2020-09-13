<?php
class Categorie extends General {
   


   
    public function  __construct($action){

        if(isset($action) ){
         
         // lecture des données envoyées par url
          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];
          if(isset($_GET['ssaction']))$ssaction=$_GET['ssaction'];

         if(isset($_GET['saction'])):
                
            //Cas Add
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

        
               // Cas Publier/dépublier
            if( isset($id) && ($saction=="PutOffline" or $saction=="PutOnline")) $this->ChangerStatut($action,$saction,$id);
           
            //Cas list sous cat
             if($saction=="List" && isset($id)){
              if(isset($ssaction ) &&  $ssaction == "Add" && !empty($_POST)){
                echo "string";
                // Création sous cat
                 //définition de param
              $param=$this->getParam();
              // eviter les doublons sur le nom de photo
                if(empty($this->getAllByParam($action,$param))){
                   $resultat=$this->Add($action,$param); 
                   }else{
                    $resultat=0;
                   }
                  
                    $msg=$this->getMsg($resultat);

                }
              $data=[];
              //vérifier si cet id est id parent ou pas
              $param=[];
              $param[0]['col']='id_parent';
              $param[0]['val']=$id;
              $data=$this->getAllByParam($action,$param);
              
             }
           
           
            
              //$data=$this->BanniereOnly($id);
      
          endif;// fin existe saction        
             
            
           // chargement des data si pas encore créé
          if(!isset($data)){
            
            $param=[];
            $param[0]['col']='id_parent';
            $param[0]['val']=0;
            $data=$this->getAllByParam($action,$param);

          }
          // affichage de la vue
          require_once($this->getView());
         
      }//Fin action

    }
private function getParam(){
    extract($_POST);
    $nom=str_replace("'", "\'", $nom);          
    $param[0]['col']='nom';
    $param[0]['val']=ucfirst(strtolower($nom));
    $param[1]['col']='id_parent';
    if(!empty($id_parent)){
      $param[1]['val']=$id_parent;
    }else{
      $param[1]['val']=0;
    }
    
    return $param;
}
 



}