<?php
class Prestation extends General{


   
  public function  __construct($action){
     
      if(isset($action) ){ 
            //L type  doit toujours exiter
          if(isset($_GET['type']) or isset($_SESSION['type'])){
            $type=(isset($_GET['type']))? $_GET['type']:$_SESSION['type'];
            $_SESSION['type']=$type; 
            $list_type=[];
            $list_type[0]="Service"; 
            $list_type[1]="Solution";
            $list_type[2]="Formation";
            if(!in_array($type, $list_type)){
               header("Location:index.php?action=Erreur404");
            }
          }else{
            header("Location:index.php?action=Erreur404");
          }

           if(isset($_GET['saction']))$saction=$_GET['saction'];
           if(isset($_GET['id']))$id=$_GET['id'];
           

          if(isset($saction) && $saction=="add"){
            //Creation
            #définition de param
            $param=$this->getParam($type);
            // eviter les doublons sur le titre
            $param_test[0]['col']="titre";
            $param_test[0]['val']=$param[1]['val'];
            if(empty($this->getAllByParam($action,$param_test))){
              $resultat=$this->Add($action,$param); 
            }else{
                $resultat=0;
            }
              
            $msg=$this->getMsg($resultat);
            
                
           
          }// fin add
          //Sous prestation
          if(isset($saction) && $saction=="List" && isset($id)){
            //Service parent via l'id
            $titre_parent=$this->getColsByCol($action,"titre",'id',$id);


            //charmengement des sous prestation
            $data=[];
            $param=[];
            $param[0]['col']='type';
            $param[0]['val']=$type;
            $param[1]['col']='id_parent';
            $param[1]['val']=$id;
            $data=$this->getAllByParam($action,$param);
          }

          //détail
           if(isset($saction) && $saction=="Detail" && isset($id)){
            //Titre du service
            $titre=$this->getColsByCol($action,"titre",'id',$id);
             $h=721; $w=322;

            //Mise à jour
            if(isset($_GET['ssaction']) && $_GET['ssaction']=="update"){
              //demande de mise à jours

              if(!empty($_POST)){

               extract($_POST);

                if(!empty($description)){
                    $param[0]['col']='description';
                    $param[0]['val']=str_replace("'", "\'", $description);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }

                if(!empty($resume)){
                    $param[0]['col']='resume';
                    $param[0]['val']=str_replace("'", "\'", $resume);
                    $ligne=$this->updateParamById($action,$param,$id);
                }
                if(!empty($_FILES['image']['tmp_name'])){
                    //Importatation de l'image
                    $h=322;
                    $w=721;  
                    $ext="png";
                    $chemin="img/".strtolower($type);
                    $chemin_download="../".$chemin;
                    $nom= $titre;
                    $maxpoids=5 * 1024 * 1024;
                    $input='image';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                      $chemin.="/".formaterNameFile($titre).".".$ext;
                      $param[0]['col']='image';
                      $param[0]['val']=str_replace("'", "\'", $chemin );
                      $ligne=$this->updateParamById($action,$param,$id);
                    }
                  
                }

                if(!empty($_FILES['plaquette']['tmp_name'])){
                    //Importatation de l'image
                    $h=0;
                    $w=0;
                    $ext="pdf";
                    $chemin="../img/".strtolower($type);
                    $nom= $titre;
                    $maxpoids=5 * 1024 * 1024;
                    $input='plaquette';
                    $Image= NEW Picture($h,$w,$ext,$chemin,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                        $chemin.="/".formaterNameFile($titre).".".$ext;
                      $param[0]['col']='plaquette';
                      $param[0]['val']=str_replace("'", "\'", $chemin );
                      $ligne=$this->updateParamById($action,$param,$id);
                    }
                  
                }
                //var_dump($result_import); exit;
                
                 // $msg=$this->getMsg($ligne);
              }//Post non nul
            }//Fin mise àjours


            
            //charmengement des sous prestation
            $data=[];
            $param=[];
            $param[0]['col']='type';
            $param[0]['val']=$type;
            $param[1]['col']='id';
            $param[1]['val']=$id;
            $data=$this->getAllByParam($action,$param);

          
          }//Fin détail
          //Chargement des data par defaut       
           if(!isset($data)){
                $param=[];
                $param[0]['col']='type';
                $param[0]['val']=$type;
                $param[1]['col']='id_parent';
                $param[1]['val']=0;

                $data=$this->getAllByParam($action,$param);
               

           }//Fin chargement data
            // affichage de la vue
            require_once($this->getView());
         
      }//Fin action
 

  }//Constructeur

  private function getParam($type){
    extract($_POST);
    //$nom=str_replace("'", "\'", $nom); 
    $param[0]['col']='id_parent';
    if(!empty($id_parent)){
      $param[0]['val']=$id_parent;
    }else{
      $param[0]['val']=0;
    }
    $titre=ucfirst(str_replace("'", "\'", $titre));
    $titre1=ucfirst(str_replace("\'", "", $titre));
    $titre1=formaterNameFile($titre1);
    $param[1]['col']='titre';
    $param[1]['val']=$titre;
    if(!empty($resume)){
      $param[2]['col']='resume';
      $param[2]['val']=ucfirst(str_replace("'", "\'", $resume));
    }else{
      $param[2]['col']='resume';
      $param[2]['val']=null;
    }
   
  if(!empty($_FILES['image']['tmp_name'])){
    $param[3]['col']='image';
    $param[3]['val']="img/".strtolower($type)."/".$titre1.".png";
  }else{
      $param[3]['col']='image';
      $param[3]['val']=null;
  }

  if(!empty($_FILES['plaquette']['tmp_name'])){
    $param[4]['col']='plaquette';
    $param[4]['val']="plaquette/".strtolower($type)."/".$titre1.".pdf";
  }else{
     $param[4]['col']='plaquette';
    $param[4]['val']=null;
  }

if(isset($description)){
    $description=ucfirst(str_replace("'", "\'", $description));
    $param[5]['col']='description';
    $param[5]['val']=$description; 
 }else{
    $param[5]['col']='description';
    $param[5]['val']=null;
 }
    $param[6]['col']='type';
    $param[6]['val']=$type;

    return $param;
  }

}