<?php
class Articles{
    private $_id;
    private $_id_theme;
    private $_titre;
    private $_date_creation;
    private $_date_mj;
    private $_nombre_vue;
    private $_contenu;
    private $_resume;
    private $_source;
    private $_auteur;
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

    public function setId_theme($id_theme){
      $this->_id_theme=$id_theme;
  }
    
    public function setTitre($titre){
      $this->_titre=$titre;
    }

    public function setDate_creation($date_creation){
        $this->_date_creation=$date_creation;
    }
    public function setDate_mj($date_mj){
        $this->_date_mj=$date_mj;
    }
    public function setNombre_vue($nombre_vue){
        $this->_nombre_vue=$nombre_vue;
    }
    public function setContenu($contenu){
        $this->_contenu=$contenu;
    }
    
    public function setResume($resume){
        $this->_resume=$resume;
    }

    public function setSource($source){
        $this->_source=$source;
    }

    public function setAuteur($auteur){
        $this->_auteur=$auteur;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_theme(){
      
      return $this->_id_theme;
    }
  
    public function getTitre(){
      
       return $this->_titre;
    }

    public function getDate_creation(){
      
        return $this->_date_creation;
    }
    public function getDate_mj(){
      
        return $this->_date_mj;
    }
    public function getNombre_vue(){
      
        return $this->_nombre_vue;
    }

    public function getContenu(){
      
        return $this->_contenu;
    }
    public function getResume(){
      
        return $this->_resume;
    }

    public function getSource(){
      
        return $this->_source;
    }

    public function getAuteur(){
      
        return $this->_auteur;
    }

    public function getOnline(){
      
       return $this->_online;
    }

    
}
