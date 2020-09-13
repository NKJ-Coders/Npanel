<?php
class Illustration_articles{
    private $_id;
    private $_id_article;
    private $_lien;
    private $_type;
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

    public function setId_article($id_article){
      $this->_id_article=$id_article;
  }
    
    public function setLien($lien){
      $this->_lien=$lien;
    }

    public function setType($type){
        $this->_type=$type;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_article(){
      
      return $this->_id_article;
    }
  
    public function getLien(){
      
       return $this->_lien;
    }

    public function getType(){
      
        return $this->_type;
    }

    public function getOnline(){
      
       return $this->_online;
    }

    
}
