<?php
class Commandes{
    private $_id;
    private $_id_client;
    private $_id_produit;
    private $_id_panier;
    private $_date;
    private $_date_closing;
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

     public function setId_produit($id_produit){
      $id_produit= (int) $id_produit;
      $this->_id_produit=$id_produit;
    }

   

   
    public function setDate($date){
      $this->_date=$date;
    }
    public function setDate_closing($date_closing){
      $this->_date_closing=$date_closing;
    }

    public function setStatut($statut){
      $statut= (int) $statut;
      $this->_statut=$statut;
    }

    public function setClosing($closing){
      $closing= (int) $closing;
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

    
  
    public function getDate(){
      
       return $this->_date;
    }

    public function getDate_closing(){
      
       return $this->_date_closing;
    }

    public function getStatut(){
      
       return $this->_statut;
    }

     public function getClosing(){
      
       return $this->_closing;
    }

    public function getOnline(){
      
       return $this->_online;
    }


    
}
