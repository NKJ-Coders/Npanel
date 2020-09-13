<?php
class Entreprises{
    private $_id;
    private $_nom;
    private $_logo;
    private $_plaquette;
    private $_slogan;
    private $_adresse;
    private $_ville;
    private $_pays;
    private $_online;
    private $_description;
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
    public function setNom($nom){
      $this->_nom=$nom;
    }
    public function setLogo($logo){
      $this->_logo=$logo;
    }
     public function setPlaquette($plaquette){
      $this->_plaquette=$plaquette;
    }
    public function setSlogan($slogan){
      $this->_slogan=$slogan;
    }

    public function setAdresse($adresse){
      $this->_adresse=$adresse;
    }

    public function setVille($ville){
      $this->_ville=$ville;
    }

     public function setPays($pays){
      $this->_pays=$pays;
    }

    public function setOnline($online){
      $this->_online=$online;
    }
    public function setDescription($description){
      $this->_description=$description;
    }

    public function setSite_web($site_web){
      $this->_site_web=$site_web;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getNom(){
      
       return $this->_nom;
    }
  
    public function getLogo(){
      
       return $this->_logo;
    }

    public function getPlaquette(){
      
       return $this->_plaquette;
    }

    public function getSlogan(){
      
       return $this->_slogan;
    }

    public function getAdresse(){
      
      return $this->_adresse;
   }

    public function getVille(){
      
       return $this->_ville;
    }
       public function getPays(){
      
      return $this->_pays;
    }

    public function getOnline(){
      
       return $this->_online;
    }

    public function getDescription(){
      
      return $this->_description;
   }

   public function getSite_web(){
      
    return $this->_site_web;
  }
    
}
