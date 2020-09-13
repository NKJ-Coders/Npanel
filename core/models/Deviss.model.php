<?php
class Deviss{
    private $_id;
    public $_id_client;
    private $_id_prestation;
    private $_date;
    private $_date_demarrage;
    private $_adresse_site;
    private $_description;
    private $_statut;
    private $_closing;
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
    
   public function setId_client($id_client){
      $id_client= (int) $id_client;
      $this->_id_client=$id_client;
    }

     public function setId_prestation($id_prestation){
      $id_prestation= (int) $id_prestation;
      $this->_id_prestation=$id_prestation;
    }

    public function setDate($date){
      $this->_date=$date;
    }

    public function setDate_demarrage($date_demarrage){
      $this->_date_demarrage=$date_demarrage;
    }

    public function setAdresse_site($adresse_site){
      $this->_adresse_site=$adresse_site;
    }

    public function setDescription($description){
      $description= (string) $description;
      $this->_description=$description;
    }

    public function setStatut($statut){
      $this->_statut=$statut;
    }
    public function setClosing($closing){
      $this->_closing=$closing;
    }
    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_client(){
      return $this->_id_client;
    }

    public function getId_prestation(){
      return $this->_id_prestation;
    }


    public function getDate(){
      
       return $this->_date;
    }

    public function getDate_demarrage(){
      
       return $this->_date_demarrage;
    }

     public function getAdresse_site(){
      
       return $this->_adresse_site;
    }

   public function getStatut(){
      
       return $this->_statut;
    }
    public function getClosing(){
      
       return $this->_closing;
    }

    public function getDescription(){
      return $this->_description;
    }
    public function getOnline(){
      
       return $this->_online;
    }


    
}
