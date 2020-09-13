<?php
class Devis extends General{ 

   
    public function  __construct($action){
     
        if(isset($action) ){

          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];
          if(isset($_GET['ssaction']))$ssaction=boolval($_GET['ssaction']) ;

          if(isset($saction)){
              if(isset($id)){
               // Changement du statut à la premiere ouverture
                $this->openDevis($action,$id);

              //
                if(isset($ssaction) && is_bool($ssaction)){
                  $param[0]['col']='closing';
                  $param[0]['val']=$ssaction;
                  $this->updateParamById($action,$param,$id);

                }

                //Information sur la commande
                $param[0]['col']='id';
                $param[0]['val']=$id;
                $data=$this->getAllByParam($action,$param);


              }
          }

          //Chargement des données par defaut
          if(!isset($data)){
            $data=$this->AllData($action);
          }
          // affichage de la vue
           require_once($this->getView());
         
      }//Fin action
    }
private function openDevis($action,$id){
  if(isset($action) && isset($id)){
    //Changement du statut si premier fois qu'on clique sur détail
    $statut_commande=$this->getColsByCol($action,"statut","id",$id);
    $param[0]['col']='statut';
    $param[0]['val']=1;
    if($statut_commande==0)$this->updateParamById($action,$param,$id);
  }
    
}

private function formater($prefixe,$id,$longueur){
    $nbreChiffre=strlen($id);
        $idR=$prefixe;
        if($nbreChiffre<$longueur){
           $nbreChiffreEnMoins= $longueur-$nbreChiffre;
        }
        for ($i=1; $i < $nbreChiffreEnMoins ; $i++) {
          $idR.='0';

        }

        return $idR.=$id;

  }  



}