<?php 
ABSTRACT class General {
    private $_view;// la partie vu qui  affiche la formation 
    private $_BanniereManager;
    private $_ContactManager;
    private $_CategorieManager;
    private $_ProduitManager;
    private $_MarqueManager;
    private $_ConditionnementManager;
    private $_PrestationManager;
    private $_CommandeManager;
    private $_CustumerManager;
    private $_PanierManager;
    private $_EntrepriseManager;
    private $_AgenceManager;
    private $_DevisManager;
   




    protected function setView($action){
    
        $file="core/views/".strtolower($action).".view.php";
        $error_file="core/views/page_contruction.view.php";
        $this->_view=(file_exists($file))?$file:$error_file;


    }

    protected function getView($action){

             $this->setView($action);
        return $this->_view;
    }

    protected function getRoot_file_to_include($action,$include_place){
        $root="core/include/".strtolower($action)."/";
        if($include_place=="controller"){
             $root.="partial_controller/";
        }elseif($include_place=='view'){
            $root.="partial_view/";
        }
        return $root;


    }

    protected function AllData($action){
     $table=strtolower($action);
     $action=ucfirst(strtolower($table));
     $obj= $action."s";
     $modelManager="_".$action."Manager";
     $classeManager=$action."Manager";
     $this->$modelManager = new $classeManager();
     return $this->$modelManager->getAllData($table,$obj);
    }

    protected function Add($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->AddData($table,$param);
    } 

    protected function getAllByParam($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $obj= $action."s";
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getAllDataByParam($table,$param,$obj);
    }

    protected function getColsByCol($action,$cols,$col,$val){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getOneColbyOneCol($table,$cols,$col,$val);
    }
    



    protected function updateParamById($action,$param,$id){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->updateDataById($table,$id,$param);
    }

     protected function GetMaxId($action){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getMaxDataId($table);
    }

     

    protected function ChangerStatut($action,$saction,$id){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $obj= $action."s";
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $online=1;
         if($saction=="PutOnline")$online="1";
         if($saction=="PutOffline")$online="0";
         if($saction=="Del") $online="-1";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->ChangeStatut($table,$online,$id);
    }
    protected function getMsg($resultat){

        if(!empty($resultat)){
            $msg='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-check" aria-hidden="true"></i> </strong> Créé avec succès!
                </div>';

        }else{
            $msg='<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Echec de création!
                </div>';
        }
     return $msg;
    }




 

}