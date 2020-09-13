<?php
class Contacts{
    private $_id;
    private $_id_prestation;
    private $_nom;
    private $_tel;
    private $_nom_entreprise;
    private $_objet;
    private $_contenu;
    private $_type;
    private $_fonction_personne;
    private $_mail;
    private $_etat;
    private $_date_message;
    private $_date_commande;
    private $_statut;
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
    public function setId_prestation($id_prestation){
      $this->_id_prestation=$id_prestation;
    }
    public function setINom($nom){
      $this->_nom=$nom;
    }
     public function setTel($tel){
      $this->_tel=$tel;
    }
    public function setNom_entreprise($nom_entreprise){
      $this->_nom_entreprise=$nom_entreprise;
    }

    public function setObjet($objet){
      $this->_objet=$objet;
    }

    public function setContenu($contenu){
        $this->_contenu=$contenu;
    }

    public function setType($type){
        $this->_type=$type;
    }

    public function setFonction_personne($fonction_personne){
        $this->_fonction_personne=$fonction_personne;
    }
    public function setMail($mail){
        $this->_mail=$mail;
    }

    public function setEtat($etat){
        $this->_etat=$etat;
    }
    public function setDate_message($date_message){
        $this->_date_message=$date_message;
    }

    public function setDate_commande($date_commande){
        $this->_date_commande=$date_commande;
    }

    public function setStatut($statut){
        $this->_statut=$statut;
    }

    public function setonline($online){
        $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_prestation(){
      
       return $this->_id_prestation;
    }
  
    public function getNom(){
      
       return $this->_nom;
    }

    public function getTel(){
      
       return $this->_tel;
    }

    public function getNom_entreprise(){
      
       return $this->_nom_entreprise;
    }

    public function getObjet(){
      
        return $this->_objet;
    }

    public function getContenu(){
      
        return $this->_contenu;
    }

    public function getType(){
      
        return $this->_type;
    }

    public function getFonction_personne(){
      
        return $this->_fonction_personne;
    }

    public function getMail(){
      
        return $this->_mail;
    }
     
    public function getEtat(){
      
        return $this->_etat;
    }

    public function getDate_message(){
      
        return $this->_date_message;
    }

    public function getDate_commande(){
      
        return $this->_tel;
    }

    public function getStatut(){
      
        return $this->_statut;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
}
