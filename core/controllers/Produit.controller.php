<?php
class Produit extends General {
   


   
    public function  __construct($action){

    //  if(1==1)require_once('script.php');

        if(isset($action) ){
         
         // lecture des données envoyées par url
          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];

         if(isset($_GET['saction'])):
                
            //Cas Add 
            if( $saction=="add"){
              $result_import=$this->getFille("image1");
              if($result_import[1]==1){

                //définition de param
                $param=$this->getParam();
                // eviter les doublons sur le nom de photo
                  if(empty($this->getAllByParam($action,$param))){
                   $resultat=$this->Add($action,$param); 
                 }else{
                  $resultat=0;
                 }
              

              }else{
                $resultat=0;
              }
             
                $msg=$this->getMsg($resultat);

             }//if( $saction=="add"){

        
               // Cas Publier/dépublier
            if( isset($id) && ($saction=="PutOffline" or $saction=="PutOnline")) $this->ChangerStatut($action,$saction,$id);
           
            //Cas  détail produit
             if($saction=="Detail" && isset($id)){
             #Si demande de mise à jours
              if(isset($_GET['ssaction']) && $_GET['ssaction']=="update" ){
                
                 if(!empty($_POST)){
                    extract($_POST);
                    if(!empty($description)){
                      $param[0]['col']='description';
                      $param[0]['val']= str_replace("'", "\'", $description) ;

                      $ligne=$this->updateParamById($action,$param,$id);

                    }//Fin Empty desscription


                 }
                if(isset($_GET['stock'])){ 
                   if($_GET['stock']==0 or $_GET['stock']==1){
                      $param[0]['col']='disponible';
                      $param[0]['val']=$_GET['stock'];

                      $ligne=$this->updateParamById($action,$param,$id);

                   }
                }//Fin stock

                if(isset($_GET['vitrine'])){
                   if($_GET['vitrine']==0 or $_GET['vitrine']==1){
                      $param[0]['col']='vitrine';
                      $param[0]['val']=$_GET['vitrine'];

                      $ligne=$this->updateParamById($action,$param,$id);

                   }

                }//fin vitrine

                if(isset($_GET['conditionnement'])){
                  
                  $true_condition=$this->getColsByCol('conditionnement','nom','nom',$_GET['conditionnement']);
                                   
                   if(!empty($true_condition)){
                      $param[0]['col']='conditionnement';
                      $param[0]['val']=$_GET['conditionnement'];

                      $ligne=$this->updateParamById($action,$param,$id);

                   }

                }//fin vitrine
              }//fin mise à jours  détail
              //Chargement des élément du détail 
                $description="";
                $data_img=[];
                $data=[];
                $param=[];
                $param[0]['col']='id';
                $param[0]['val']=$id;
                $data=$this->getAllByParam($action,$param);
                if(!empty($data)){
                   $nom_produit=$data[0]->getNom();
                   $description=$data[0]->getDescription();
                   if(!empty($data[0]->getImage1()))$data_img[0]=$data[0]->getImage1();
                   if(!empty($data[0]->getImage2()))$data_img[1]=$data[0]->getImage2();
                   if(!empty($data[0]->getImage3()))$data_img[2]=$data[0]->getImage3();
                }//data pas empty
             }//Fin détail
           
           
            
              //$data=$this->BanniereOnly($id);
      
          endif;// fin existe saction        
             
            
           // chargement des data si pas encore créé
          if(!isset($data)){
            
            $data=$this->AllData($action);

          }
          // affichage de la vue
          require_once($this->getView());
         
      }//Fin action

    }
private function getParam(){

    extract($_POST);
    $nom=str_replace("'", "\'", $nom);
    $param[0]['col']='id_cat';
    $param[0]['val']=$id_cat;              
    $param[1]['col']='nom';
    $param[1]['val']=ucfirst(strtolower($nom));
    $param[2]['col']='marque';
    $param[2]['val']=ucfirst($marque);
    $param[3]['col']='image1';
    $nom=formaterNameFile($nom);
    $param[3]['val']="images/shop/".$nom.".jpg";;

    return $param;
}

private function getFille($input){
  extract($_POST);
  if(!empty($input)){
    //Traitement de l'image
    $h=260;//Hauteur
    $w=203;//lageur
    $ext="jpg";
    $chemin="../images/shop";
    $nom=ucfirst(strtolower($nom));
    $maxpoids=5 * 1024 * 1024;
    $nom=formaterNameFile($nom);
    $Image= NEW Picture($h,$w,$ext,$chemin,$nom,$maxpoids);
     return $Image->import($input);

  }else{
    return null;
  }
  
    
}
 



}