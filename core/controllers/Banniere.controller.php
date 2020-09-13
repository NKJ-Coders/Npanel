<?php
class Banniere extends General { 
   

    public function  __construct($action){

        if(isset($action) ){
          if(isset($_GET['saction']))$saction=$_GET['saction'];
          if(isset($_GET['id']))$id=$_GET['id'];

          //insertion
          if(isset($saction) && $saction=="add"){
             if(isset($_POST)){
              extract($_POST);
               $param=[];
               $param=$this->getParam($action);
               $resultat=0;
              #eviter les doublons
          
              if(!empty($_FILES['image']['tmp_name'])){
                    //Importation de la banière
                    $h=322;
                    $w=721;  
                    $ext="png";
                    $chemin="img/";
                    $chemin_download="../".$chemin;
                    $max_id=$this->GetMaxId($action)+1;
                    $nom= $param[6]['val']."-".$max_id;
                    $maxpoids=5 * 1024 * 1024;
                    $input='image';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    
                    if($result_import[1] ){
                       $resultat=$this->Add($action,$param); 
                       if(empty($resultat)){
                          $msg=$this->getMsg($resultat);
                        }else{
                          header("Location:index.php?action=Banniere");
                        }
                    }else{
                      $resultat=0;
                      $msg=$this->getMsg($resultat);
                    }
                  
                }//fin $_fille
              
              
       
             }//envoie du formulaire

          }//add
          //détail
          if(isset($saction) && $saction="Detail"){
            //position bannère
             
             $position =$this->getColsByCol($action,"position",'id',$id);
            //var_dump($position);
            $h=721; $w=322; 
            //Mise à jour
            if(isset($_GET['ssaction']) && $_GET['ssaction']=="update"){
              if(!empty($_POST)){
                extract($_POST);
              
                if(!empty($texte1)){
                    $param=[];
                    $param[0]['col']='texte1';
                    $param[0]['val']=str_replace("'", "\'", $texte1);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }

                if(!empty($texte2)){
                    $param=[];
                    $param[0]['col']='texte2';
                    $param[0]['val']=str_replace("'", "\'", $texte2);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }
                if(!empty($texte3)){
                    $param=[];
                    $param[0]['col']='texte3';
                    $param[0]['val']=str_replace("'", "\'", $texte3);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }
              }//fin post
              if(!empty($_FILES['image']['tmp_name'])){
                    //Importatation de l'image
                     $h=322;
                    $w=721;  
                    $ext="png";
                    $chemin="img/";
                    $chemin_download="../".$chemin;
                    $nom= $position."-".$id;
                    $maxpoids=5 * 1024 * 1024;
                    $input='image';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                      $chemin='img/'.$position.'-'.$id.'.png';
                      $param=[];
                      $param[0]['col']='photo';
                      $param[0]['val']= $chemin;
                      $ligne=$this->updateParamById($action,$param,$id);
                    }
                  
                }//$_FILES['image']

            }//fin update
            $param=[];
            $param[0]['col']='id';
            $param[0]['val']=$id;
            $data=$this->getAllByParam($action,$param);

          }//fin detail
           //Chargement des data par defaut       
           if(!isset($data)){
                $data=$this->AllData($action);
           }//Fin chargement data

          // affichage de la vue
          require_once($this->getView());
        }// if(isset($action) ){

    }
private function getParam($action){
  if(isset($_POST)){
    extract($_POST);
                  
    if(isset($position)){
      $position=formaterNameFile($position);
    }else{
      $position=null;
    }

    $taille =0;
    if(isset($id_entreprise)){
       $param[0]['col']='id_entreprise';
      $param[0]['val']=$id_entreprise;
    }
   

    $param[1]['col']='texte1';
    if(!empty($texte1)){
     $param[1]['val']=str_replace("\'", "'", $texte1);
    }else{
      $param[1]['val']=null;
    }
    

    $param[2]['col']='texte2';
    if(!empty($texte2)){
     $param[2]['val']=str_replace("\'", "'", $texte2); 
    }else{
      $param[2]['val']=null;
    }

    $param[3]['col']='texte3';
    if(!empty($texte3)){
     $param[3]['val']=str_replace("\'", "'", $texte3); 
    }else{
      $param[3]['val']=null;
    }
    //lien de la baniere
    $max_id=$max_id=$this->GetMaxId($action)+1;
    $chemin='img/'.$position.'-'.$max_id.'.png';

    $param[4]['col']='photo';
    $param[4]['val']=$chemin;

    $param[5]['col']='taille';
    $param[5]['val']=$taille;

    $param[6]['col']='position';
    $param[6]['val']=$position;

    $param[7]['col']='date_pub';
    $param[7]['val']=date("Y/m/d");

  return $param;

  }
    
}
 


}