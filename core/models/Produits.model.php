<?php
class Produits{
    private $_id;
    private $_id_cat;
    private $_image1;
    private $_image2;
    private $_image3;
    private $_nom;
    private $_marque;
    private $_quantite;
    private $_conditionnement;
    private $_disponible;
    private $_description;
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
    public function setId_cat($id_cat){
      $this->_id_cat=$id_cat;
    }
     public function setImage1($image1){
      $this->_image1=$image1;
    }
    public function setImage2($image2){
      $this->_image2=$image2;
    }

    public function setImage3($image3){
      $this->_image3=$image3;
    }

    public function setNom($nom){
      $this->_nom=$nom;
    }

     public function setMarque($marque){
      $this->_marque=$marque;
    }

    public function setQuantite($quantite){
        $this->_quantite=$quantite;
    }

    public function setConditionnement($conditionnement){
      $this->_conditionnement=$conditionnement;
    }

    public function setDisponible($disponible){
      $this->_disponible=$disponible;
    }

     public function setVitrine($vitrine){
      $this->_vitrine=$vitrine;
    }

    public function setDescription($description){
      $this->_description=$description;
    }

     public function setOnline($online){
      $this->_online=$online;
    }


     public function getId(){
      
      return $this->_id;
    }
  
    public function getId_cat(){
      
       return $this->_id_cat;
    }

    public function getImage1(){
      
       return $this->_image1;
    }

    public function getImage2(){
      
       return $this->_image2;
    }

    public function getImage3(){
      
      return $this->_image3;
    }

    public function getNom(){ 
      
       return $this->_nom;
    }
       public function getQuantite(){
      
      return $this->_quantite;
    }
  
    public function getConditionnement(){
      
        return $this->_conditionnement;
    }

    public function getDisponible(){
      
      return $this->_disponible;
    }

    public function getDescription(){
      
       return $this->_description;
    }
     public function getMarque(){
      
       return $this->_marque;
    }
    public function getVitrine(){
      
        return $this->_vitrine;
    }
    public function getOnline(){
      
        return $this->_online;
    }

    
}
