<?php
class Paniers{
    private $_id;
    public $_id_commande;
    private $_id_produit;
    private $_qt;
    private $_pu;
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
    
   public function setId_commande($id_commande){
      $id_commande= (int) $id_commande;
      $this->_id_commande=$id_commande;
    }

     public function setId_produit($id_produit){
      $id_produit= (int) $id_produit;
      $this->_id_produit=$id_produit;
    }

    public function setQt($qt){
      $qt= (int) $qt;
      $this->_qt=$qt;
    }

    public function setPu($pu){
      $pu= (int) $pu;
      $this->_pu=$pu;
    }

    
    public function setOnline($online){
      $this->_online=$online;
    }


     public function getId(){
      
      return $this->_id;
    }
  
   

   

    public function getId_produit(){
      return $this->_id_produit;
    }

    public function getId_commande($id_commande){
      return $this->_id_commande;
    }


    public function getQt(){
      
       return $this->_qt;
    }

    public function getPu(){
      
       return $this->_pu;
    }

   

    public function getOnline(){
      
       return $this->_online;
    }


    
}
