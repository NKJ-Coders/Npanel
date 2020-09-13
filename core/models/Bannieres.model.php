<?php
class Bannieres{
    private $_id;
    private $_id_entreprise;
    private $_texte1;
    private $_texte2;
    private $_texte3;
    private $_photo;
    private $_taille;
    private $_position;
    private $_date_pub;
    private $_online;
  
    public function __construct(array $data){
        $this->hydrate($data);
    }
  
    public function hydrate(array $data){
        
        foreach($data as $key => $value){

          $method="set".ucfirst($key);
          if(method_exists($this,$method)){
              $this->$method($value);
          }
  
        }
    }
   public function setId($id){
        $id= (int) $id;
        if($id>0)$this->_id=$id;
    }
    public function setId_entreprise($id_entreprise){
      $this->_id_entreprise=$id_entreprise;
    }
     public function setTexte1($texte1){
      $this->_texte1=$texte1;
    }
    public function setTexte2($texte2){
      $this->_texte2=$texte2;
    }

    public function setTexte3($texte3){
      $this->_texte3=$texte3;
    }

     public function setPhoto($photo){
      $this->_photo=$photo;
    }
    public function setTaille($taille){
      $this->_taille=$taille;
    }

    public function setPosition($position){
      $this->_position=$position;
    }
    public function setDate_pub($date_pub){
      $this->_date_pub=$date_pub;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
  
    public function getId_entreprise(){
      
       return $this->_id_entreprise;
    }

    public function getNom(){
      
       return $this->_nom;
    }

    public function getTexte1(){
      
       return $this->_texte1;
    }

     public function getTexte2(){
      
       return $this->_texte2;
    }

     public function getTexte3(){
      
       return $this->_texte3;
    }

    public function getPhoto(){
      
       return $this->_photo;
    }

    public function getDescription(){
      
       return $this->_description;
    }
       public function getPosition(){
      
      return $this->_position;
    }
  
    public function getDate_pub(){
      
       return $this->_date_pub;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
}
