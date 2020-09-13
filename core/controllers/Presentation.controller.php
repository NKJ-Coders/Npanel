<?php
class Presentation extends General{

    public function  __construct($action){
  
        if(isset($action) ){
          // lecture des données envoyées par url
          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];
          if(isset($_GET['ssaction']))$ssaction=$_GET['ssaction'];

          if(isset($saction) && $saction=='add'){
            //Add
            extract($_POST);
            if(isset($_POST)){

              //eviter lesdoublons
              $param_test['0']['col']='rubrique';
              $param_test['0']['val']=$rubrique;
              if(empty($this->getAllByParam($action,$param_test))){
                $param=[];
                $param['0']['col']='id_parent';
                $param['0']['val']=0;
                $param['1']['col']='rubrique';
                $param['1']['val']=str_replace("'", "\'", $rubrique );
                $param['2']['col']='description';
                $param['2']['val']=str_replace("'", "\'", $description );
                  $resultat=$this->Add($action,$param); 
              }else{
                  $resultat=0;
              }//test doublons
              
              $msg=$this->getMsg($resultat);
            

            }//fin post
            
          }//Fin  Add
          if(isset($saction) && $saction=="Detail" && isset($id)){
            //rubrique 
            $rubrique=$this->getColsByCol($action,"rubrique",'id',$id);
             $h=721; $w=322;
              //Mise à jour
            if(isset($_GET['ssaction']) && $_GET['ssaction']=="update"){
              //demande de mise à jours

              if(!empty($_POST)){

               extract($_POST);

                if(!empty($description)){
                    $param=[];
                    $param[0]['col']='description';
                    $param[0]['val']=str_replace("'", "\'", $description);
                    $ligne=$this->updateParamById($action,$param,$id); 
                }

                if(!empty($resume)){
                    $param=[];
                    $param[0]['col']='resume';
                    $param[0]['val']=str_replace("'", "\'", $resume);
                    $ligne=$this->updateParamById($action,$param,$id);
                }
                if(!empty($_FILES['image']['tmp_name'])){
                    //Importatation de l'image
                    $h=322;
                    $w=721;  
                    $ext="png";
                    $chemin="img";
                    $chemin_download="../".$chemin;
                    $nom= $rubrique;
                    $maxpoids=5 * 1024 * 1024;
                    $input='image';
                    $Image= NEW Picture($h,$w,$ext,$chemin_download,$nom,$maxpoids);
                    $result_import=$Image->import($input);
                    //var_dump($resultat_import); exit;
                    //Mj
                    if($result_import[1] ){
                      $chemin.="/".formaterNameFile($nom).".".$ext;
                      $param[0]['col']='image';
                      $param[0]['val']=str_replace("'", "\'", $chemin );
                      $ligne=$this->updateParamById($action,$param,$id);
                    }

                  
                }

               
                
                 // $msg=$this->getMsg($ligne);
              }//Post non nul
            }//Fin mise àjours
             //charmengement des sous prestation
              $data=[];
              $param=[];
              $param[0]['col']='id';
              $param[0]['val']=$id;
              $data=$this->getAllByParam($action,$param);

          }//vue détail
          //Chargement des données par defaut
          if(!isset($data)){
            $data=$this->AllData($action);
          }
        // affichage de la vue
        require_once($this->getView());
         
      }//Fin action

    }




}