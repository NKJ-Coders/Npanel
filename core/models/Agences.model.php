<?php
class Agences{
    private $_id;
    private $_id_entreprise;
    private $_nom;
    private $_ville;
    private $_pays;
    private $_adresse;
    private $_plaquette;
    private $_date_pub;
    private $_online;
    private $_logo;
    private $_slogan;
    private $_description;
   

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
     public function setVille($ville){
      $this->_ville=$ville;
    }
    public function setPays($pays){
      $this->_pays=$pays;
    }

    public function setAdresse($adresse){
        $this->_adresse=$adresse;
      }

    public function setPlaquette($plaquette){
        $this->_plaquette=$plaquette;
    }

    public function setDate_pub($date_pub){
        $this->_date_pub=$date_pub;
    }

    public function setOnline($online){
      $this->_online=$online;
    }

    public function setLogo($logo){
      $this->_logo=$logo;
    }

    public function setSlogan($slogan){
      $this->_slogan=$slogan;
    }
    public function setDescription($description){
      $this->_description=$description;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_entreprise(){
      
       return $this->_id_entreprise;
    }
  
    public function getId_agence(){
      
       return $this->_id_agence;
    }

    public function getType(){
      
       return $this->_type;
    }

    public function getValeur(){
      
       return $this->_valeur;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
    public function getLogo(){
      
      return $this->_logo;
    }
    public function getSlogan(){
        
      return $this->_slogan;
    }
    public function getDescription(){
        
      return $this->_description;
    }
}
