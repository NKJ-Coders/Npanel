<?php 
class PartenaireManager extends db {
    private $table="partenaire";
    private $obj="Partenaires";
    private $col_0 ="id";
    private $col_1 ="id_entreprise";
    private $col_2 ="nom";
    private $col_3="logo";
    private $col_4="description";
    private $col_5 ="type";
    private $col_6="date_pub";
    private $col_7="online";

  /*
  * renvoie toutes les Partenaires donc le type est $type et online = 1
  */
  
  public function getAllPartenaire($type){
    $this->getBbd(); // connexion à la base de donnees 
    return $this->getAllByTwoCol($this->table,$this->obj,$this->col_5,$this->col_7,$type,1);
  }
  public function getPartenaireById($id){
    $this->getBbd(); // connexion à la base de donnees 
    return $this->getAllById($this->table,$this->obj,$id);
  }

}
