<?php
class Prestations{
    private $_id;
    private $_id_parent;
    private $_id_entreprise;
    private $_titre;
    private $_description;
    private $_icone;
    private $_icone2;
    private $_plaquette;
    private $_resume;
    private $_refference;
    private $_e_service;
    private $_image;
    private $_video;
    private $_duree;
    private $_prix;
    private $_type;
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
    public function setTitre($titre){
      $this->_titre=$titre;
    }

    public function setDescription($description){
      $this->_description=$description;
    }

     public function setIcone($icone){
      $this->_icone=$icone;
    }

    public function setIcone2($icone2){
      $this->_icone2=$icone2;
    }

    public function setPlaquette($plaquette){
      $this->_plaquette=$plaquette;
    }

    public function setResume($resume){
      $this->_resume=$resume;
    }

    public function setRefference($refference){
      $this->_refference=$refference;
    }

     public function setE_service($e_service){
      $this->_e_service=$e_service;
    }

    public function setImage($image){
      $this->_image=$image;
    }

    public function setVideo($video){
      $this->_video=$video;
    }

    public function setDuree($duree){
      $this->_duree=$duree;
    }

     public function setPrix($prix){
      $this->_prix=$prix;
    }
    public function setType($type){
      $this->_type=$type;
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

    public function getTitre(){
      
       return $this->_titre;
    }

    public function getDescription(){
      
       return $this->_description;
    }

    public function getIcone(){
      
      return $this->_icone;
    }

    public function getIcone2(){
      
      return $this->_icone2;
    }

    public function getPlaquette(){
      
      return $this->_plaquette;
    }
  
    public function getResume(){
      
       return $this->_resume;
    }

    public function getRefference(){
      
       return $this->_refference;
    }

    public function getE_service(){
      
       return $this->_e_service;
    }

    public function getImage(){
      
      return $this->_image;
    }

    public function getVideo(){
      
       return $this->_video;
    }
    public function getDuree(){
      
       return $this->_duree;
    }
    public function getPrix(){
      
       return $this->_prix;
    }
    public function getType(){
      
       return $this->_type;
    }
    public function getDate_pub(){
      
       return $this->_date_pub;
    }
    public function getOnline(){
      
       return $this->_online;
    }
    
}
