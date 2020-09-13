<?php
class References{
    private $_id;
    private $_id_entreprise;
    private $_nom;
    private $_metier;
    private $_logo;
    private $_description;
    private $_type;
    private $_chiffre;
    private $_date_reference;
    private $_online;
    private $_site_web;
   
  
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
     public function setNom($nom){
      $this->_nom=$nom;
    }

     public function setMetier($metier){
      $this->_metier=$metier;
    }
    public function setLogo($logo){
      $this->_logo=$logo;
    }

    public function setDescription($description){
      $this->_description=$description;
    }

     public function setType($type){
      $this->_type=$type;
    }

    public function setChiffre($chiffre){
        $this->_chiffre=$chiffre;
    }

    public function setDate_reference($date_reference){
      $this->_date_reference=$date_reference;
    }

    public function setOnline($online){
      $this->_online=$online;
    }

    public function setSite_web($site_web){
      $this->_site_web=$site_web;
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

     public function getMetier(){
      
       return $this->_metier;
    }


    public function getLogo(){
      
       return $this->_logo;
    }

    public function getDescription(){
      
       return $this->_description;
    }
    public function getType(){
      
      return $this->_type;
    }
  
    public function getChiffre(){
      
        return $this->_chiffre;
     }
    public function getDate_reference(){
      
       return $this->_date_reference;
    }

    public function getOnline(){
      
        return $this->_online;
    }

    public function getSite_web(){
      
      return $this->_site_web;
  }

    
    
}
