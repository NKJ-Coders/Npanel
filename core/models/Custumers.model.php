<?php
class Custumers{
    private $_id;
    private $_nom;
    private $_pays;
    private $_ville;
    private $_adresse;
    private $_tel;
    private $_email;
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
      $nom= (string) $nom;
      $this->_nom= $nom;
    }

    public function setVille($ville){
        $ville= (string) $ville;
        $this->_ville= $ville;
    }

    public function setPays($pays){
        $pays= (string) $pays;
        $this->_pays= $pays;
    }

     public function setAdresse($adresse){
        $adresse= (string) $adresse;
        $this->_adresse= $adresse;
    }

    public function setTel($tel){
        $this->_tel=$tel;
    }
     public function setOnline($online){
      $this->_online=$online;
    }

    public function setEmail($email){
        $email= (string) $email;
        $this->_email= $email;
    }



  


    public function getId(){
      return $this->_id;
    }
  
    public function getNom(){
      return $this->_nom;
    }

    public function getVille(){
       return  $this->_ville;
    }
    public function getAdresse(){
       return  $this->_adresse;
    }

    public function getPays(){
        return $this->_pays;
    }

    public function getTel(){
        return $this->_tel;
    }


    public function getEmail(){
        return $this->_email;
    }

  
     public function getOnline(){
      
       return $this->_online;
    }
 
}
  