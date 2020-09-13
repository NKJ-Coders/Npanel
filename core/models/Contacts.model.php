<?php
class Contacts{
    private $_id;
    private $_id_entreprise;
    private $_id_agence;
    private $_type;
    private $_valeur;
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
    public function setId_agence($id_agence){
      $this->_id_agence=$id_agence;
    }
     public function setType($type){
      $this->_type=$type;
    }
    public function setValeur($valeur){
      $this->_valeur=$valeur;
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
    
}
