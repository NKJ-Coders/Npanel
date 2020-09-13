<?php
class Presentations{
    private $_id;
    private $_id_parent;
    private $_id_entreprise;
    private $_rubrique;
    private $_description;
    private $_image;
    private $_video;
    private $_resume;
    private $_date_pub;
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
    public function setId_parent($id_parent){
      $this->_id_parent=$id_parent;
    }
    public function setId_entreprise($id_entreprise){
      $this->_id_entreprise=$id_entreprise;
    }
     public function setRubrique($rubrique){
      $this->_rubrique=$rubrique;
    }
    public function setDescription($description){
      $this->_description=$description;
    }

    public function setImage($image){
      $this->_image=$image;
    }

    public function setVideo($video){
      $this->_video=$video;
    }

     public function setResume($resume){
      $this->_resume=$resume;
    }

    public function setDate_pub($date_pub){
      $this->_date_pub=$date_pub;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_parent(){
      
       return $this->_id_parent;
    }
  
    public function getId_entreprise(){
      
       return $this->_id_entreprise;
    }

    public function getRubrique(){
      
       return $this->_rubrique;
    }

    public function getDescription(){
      
       return $this->_description;
    }

    public function getImage(){
      
      return $this->_image;
   }

    public function getVideo(){
      
       return $this->_video;
    }
       public function getResume(){
      
      return $this->_resume;
    }
  
    public function getDate_pub(){
      
       return $this->_date_pub;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
}
