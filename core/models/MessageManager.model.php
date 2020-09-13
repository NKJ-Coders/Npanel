<?php 
class MessageManager extends db {
    private $table="message";
    private $obj="Messages";
    private $col_0 ="id";
    private $col_1 ="id_prestation";
    private $col_2 ="nom";
    private $col_3="tel";
    private $col_4="nom_entreprise";
    private $col_5 ="objet";
    private $col_6 ="contenu";
    private $col_7 ="type";
    private $col_8="fonction_personne";
    private $col_9="mail";
    private $col_10="etat";
    private $col_11="date_message";
    private $col_12="date_commande";
    private $col_13="statut";
    private $col_14="online";
//sid,$plaquette,$resume,$refference,$e_service,$video,$duree,$prix,$type,$date_pub,$online
  /*
  * Fonctions de recupérations
  */
  
  // recupérer tous les enregistrement
//   /*public function getAllData(){
//     $this->getBbd(); // connexion à la base de donnees 

//     return $this->getAll($this->table,$this->obj);
//   }
// //recupérer le titre d'un enregistrement par l'id
//  public  function getTitleDataById($id){
    
  
//        $this->getBbd(); // connexion à la base de donnees 
//       return $this->getOneColbyId($this->table,$this->col_3,$id);
   
   
     
//   }
//   //recupérer tous les enregistrements dans le systme en fonction du type 
//   public function getAllDataBytype($type){
//     $this->getBbd(); // connexion à la base de donnees 

//     return $this-> getAllByOneCol($this->table,$this->obj,$this->col_12,$type);
//   }

 

// //recupérer unenregistrement en fonction d'un id


//   public  function getDataById($id){
//     $this->getBbd(); // connexion à la base de donnees 
//     return $this->getAllById($this->table,$this->obj,$id);
//   }

//   //recupérer les enregistrements fils   by id parent


//   public  function getAllDataByIdParent($id_parent){
//     $this->getBbd(); // connexion à la base de donnees 
//     return $this->getIdByOneCol($this->table,$this->col_1,$id_parent);
//   }


// /**
// * Fonction de vérification d'existe
// **/
//  // Vérifier si un col exite


//   // vérifier si le titre existe
//  public  function titre_exist($titre){
//     $this->getBbd(); // connexion à la base de donnees 
//     return $this->OneIn_table($this->table,$this->col_3,$titre);
//   }
  
//   //vérifier si l'id exite

//    // vérifier si le titre existe
//  public  function id_exist($id){
//     $this->getBbd(); // connexion à la base de donnees 
//     return $this->OneIn_table($this->table,$this->col_0,$id);
//   }



// /**
// * Fonction d'update
// **/
//  // publie, dépublie et suprime un enregistrement en fonction de l'on et online

//  public  function MAJOnlineById($online,$id){
//     $this->getBbd(); // connexion à la base de donnees 
//     return $this->UpdateOnlineById($this->table,$online,$id);
//   }

// //modifi
//   public function Modifier($id,$id_parent,$titre,$contenu,$plaquette,$resume,$refference,$e_service,$video,$duree,$prix){

   

//       // constitution du param
//     $param[0]['col']="$this->col_1";
//     $param[0]['val']=$id_parent;

//     $param[1]['col']="$this->col_3";
//     $param[1]['val']=$titre;

//     $param[2]['col']="$this->col_4";
//     $param[2]['val']=$contenu;


//     $param[3]['col']="$this->col_5";
//     $param[3]['val']=$plaquette;


//     $param[4]['col']="$this->col_6";
//     $param[4]['val']=$resume;

//     $param[5]['col']="$this->col_7";
//     $param[5]['val']=$refference;

//     $param[6]['col']="$this->col_8";
//     $param[6]['val']=$e_service;

//     $param[7]['col']="$this->col_9";
//     $param[7]['val']=$video;

//     $param[8]['col']="$this->col_10";
//     $param[8]['val']=$duree;

//     $param[9]['col']="$this->col_11";
//     $param[9]['val']=$prix;

//     if(!empty($param) && !empty($id) && is_array($param)){
//     $this->getBbd();
//    return $this->UpdateById($this->table,$id,$param);
//     }//fin if

//   }


// /**
// * Fonction d'insertion
// **/

//   // nouvelle prestation

//   public function Add($id_parent,$titre,$contenu,$plaquette,$resume,$refference,$e_service,$video,$duree,$prix){
  
//     if($this->titre_exist($titre)!=0){
//       return 0;
//     }else{
//     // constitution du param
//     $param[0]['col']="$this->col_1";
//     $param[0]['val']=$id_parent;

//     $param[1]['col']="$this->col_3";
//     $param[1]['val']=$titre;

//     $param[2]['col']="$this->col_4";
//     $param[2]['val']=$contenu;


//     $param[3]['col']="$this->col_5";
//     $param[3]['val']=$plaquette;


//     $param[4]['col']="$this->col_6";
//     $param[4]['val']=$resume;

//     $param[5]['col']="$this->col_7";
//     $param[5]['val']=$refference;

//     $param[6]['col']="$this->col_8";
//     $param[6]['val']=$e_service;

//     $param[7]['col']="$this->col_9";
//     $param[7]['val']=$video;

//     $param[8]['col']="$this->col_10";
//     $param[8]['val']=$duree;

//     $param[9]['col']="$this->col_11";
//     $param[9]['val']=$prix;
//     $this->getBbd();

//     return $this->Addn($this->table,$param);

//   }
// }
*/
}
