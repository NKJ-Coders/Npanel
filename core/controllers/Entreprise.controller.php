<?php
class Entreprise extends General{
   
   

   
    public function  __construct($action){
    
        if(isset($action) ){
        // lecture des données envoyées par url
          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];
          if(isset($_GET['ssaction']))$ssaction=$_GET['ssaction'];

          if(isset($saction)){
            if($saction=="add"){ 
              //add
               //définition de param
                $param=$this->getParam();
              // eviter les doublons sur le nom 
                $param_test[0]['col']='nom';
                $param_test[0]['val']=$param[0]['val'];

                if(empty($this->getAllByParam($action,$param_test))){
                 $resultat=$this->Add($action,$param); 
               }else{
                $resultat=0;
               }
              
                $msg=$this->getMsg($resultat);

            }//Fin add
            //détail
            if(isset($id) && isset($saction) && $saction=="Detail"){
              //nom entreprise
              $nom_entreprise=$this->getColsByCol($action,"nom",'id',$id);
              $h=322;
              $w=721;

              if(isset($_POST)){

                extract($_POST);

                if(!empty($description)){
                    $param=[];
                    $param[0]['col']='description';
                    $param[0]['val']=str_replace("'", "\'", $description);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }

                if(!empty($slogan)){
                    $param=[];
                    $param[0]['col']='slogan';
                    $param[0]['val']=str_replace("'", "\'", $slogan);
                    $ligne=$this->updateParamById($action,$param,$id);
                }

              }//Fin post existe
              //traitement logo
              if(!empty($_FILES['logo']['tmp_name'])){
                    //Importatation de l'image
                    $h=322;
                    $w=721;
                    $ext="png";
                    $chemin="img";
                    $chemin_download="../".$chemin;
                    $nom= $nom_entreprise;
                    $maxpoids=5 * 1024 * 1024;
                    $input='logo';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                        $chemin.="/".formaterNameFile($nom).".".$ext;
                      $param[0]['col']='logo';
                      $param[0]['val']=str_replace("'", "\'", $chemin );
                      $ligne=$this->updateParamById($action,$param,$id);
                    }
                  
              }//FIN LOGO

              if(!empty($_FILES['plaquette']['tmp_name'])){
                    //Importatation de l'image
                    $h=0;
                    $w=0;
                    $ext="pdf";
                    $chemin="img";
                    $chemin_download="../".$chemin;
                    $nom=$nom_entreprise;
                    $maxpoids=5 * 1024 * 1024;
                    $input='plaquette';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                      $chemin.="/".formaterNameFile($nom_entreprise).".".$ext;
                      $param[0]['col']='plaquette';
                      $param[0]['val']=str_replace("'", "\'", $chemin );
                      $ligne=$this->updateParamById($action,$param,$id);
                    }
                  
                }// fin plaquette

              //charmengement des sous prestation
              $data=[];
              $param=[];
              $param[0]['col']='id';
              $param[0]['val']=$id;
              $data=$this->getAllByParam($action,$param);
              //var_dump($data); exit;
            }//Fin détail
            //Changement de statut
          if( isset($id) && ($saction=="PutOffline" or $saction=="PutOnline")) $this->ChangerStatut($action,$saction,$id);

          }//Fin $saction

       
        //Chargement des données par defaut
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
    $param[0]['col']='nom';
    $param[0]['val']=$nom;

    $param[1]['col']='logo';
    $param[1]['val']=null;
    if(!empty($_FILES['logo']['tmp_name'])) $param[1]['val']='';

    $param[2]['col']='plaquette';
    $param[2]['val']=null;
    if(!empty($_FILES['plaquete']['tmp_name'])) $param[1]['val']='';

    $adresse=str_replace("'", "\'", $adresse);   
    $param[3]['col']='adresse';
    $param[3]['val']=$adresse;

    $pays=str_replace("'", "\'", $pays);   
    $param[4]['col']='pays';
    $param[4]['val']=null;
    if(!empty($pays))$param[4]['val']=$pays;

    $ville=str_replace("'", "\'", $ville);   
    $param[5]['col']='ville';
    $param[5]['val']=null;
    if(!empty($ville))$param[5]['val']=$ville;

    $slogan=str_replace("'", "\'", $slogan);   
    $param[6]['col']='slogan';
    $param[6]['val']=null;
    if(!empty($slogan))$param[6]['val']=$slogan;

    $adresse=str_replace("'", "\'", $description);   
    $param[7]['col']='description';
    $param[7]['val']=$description;

    $adresse=str_replace("'", "\'", $site_web);   
    $param[8]['col']='site_web';
    $param[8]['val']=$site_web;
  
    return $param;
}   



}