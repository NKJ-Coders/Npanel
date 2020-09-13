<?php
class Marques{
    private $_id;
    private $_nom;
    private $_logo;
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
    
    public function setNom($nom){
      $this->_nom=$nom;
    }
    public function setOnline($online){
      $this->_online=$online;
    }

    public function setLogo($logo){
      $this->_logo=$logo;
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

    public function getOnline(){
      
       return $this->_online;
    }

    
}
