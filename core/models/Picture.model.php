<?php
class Picture{
    
    private $_h;
    private $_w;
    private $_ext;
    private $_chemin;
    private $_nom;
    private $_maxpoids;
   

    public function __construct($h,$w,$ext,$chemin,$nom,$maxpoids){
             //setter des arrtibuts
             $this->setH($h);
             $this->setW($w);
             $this->setExt($ext);
             $this->setChemin($chemin);
             $this->setNom($nom);
             $this->setMaxpoids($maxpoids);
      

    }
  
    
   public function setH($h){
        $h= (int) $h;
        if($h>0)$this->_h=$h;
    }
    public function setW($w){
        $w= (int) $w;
        if($w>0)$this->_w=$w;
    }
   
     public function setExt($ext){
      $ext=(string) $ext;
      $this->_ext =$ext;
    }
    public function setChemin($chemin){
      $chemin=(string) $chemin;
      $this->_chemin =$chemin;
    }

    public function setNom($nom){
      $nom=(string) $nom;
      $this->_nom =formaterNameFile($nom);;
    }

     public function setMaxpoids($maxpoids){
      $maxpoids=(int) $maxpoids;
      $this->_maxpoids =$maxpoids;
    }



     public function getH(){
      
      return $this->_h;
    }
    public function getW(){
      
       return $this->_w;
    }
  
    public function getExt(){
      
       return $this->_ext;
    }

    public function getChemin(){
      
       return $this->_chemin;
    } 

    public function getNom(){
      
       return $this->_nom;
    }

     public function getMaxpoids(){
      
       return $this->_maxpoids;
    }
    public function import($input){
       $succes=0;
       $Tab_ext=[];
       //var_dump($_FILES[$input]);exit;
      if(isset($_FILES[$input]) && $_FILES[$input]["error"] == 0){
        //extention
        if($this->getExt()=="jpg") $Tab_ext=array("jpg" => "image/jpg");
        if($this->getExt()=="jpeg") $Tab_ext =array("jpeg" => "image/jpeg");
        if($this->getExt()=="gif") $Tab_ext =array("gif" => "image/gif");
        if($this->getExt()=="png") $Tab_ext =array("png" => "image/png");

        if($this->getExt()=="pdf") $Tab_ext =array('pdf'=>'application/pdf');


        $filename = $_FILES[$input]["name"];
        $filetype = $_FILES[$input]["type"];
        $filesize = $_FILES[$input]["size"];

        // Vérifie l'extension du fichier
       $ext = pathinfo($filename, PATHINFO_EXTENSION);
       if(!array_key_exists($ext,  $Tab_ext)){
           $content_msg="Veuillez sélectionner un format de fichier valide !";
           $succes=0;
       }else{ 
          // Vérifie la taille du fichier - 5Mo maximum
          $maxsize = $this->getMaxpoids();
          if($filesize > $maxsize){
             $content_msg="Le poids du fichier doit etre au maximum ".$this->getMaxpoids." !";
             $succees=0;

          }else{//le poids est bon
            // les tailles
              $dim= getimagesize($_FILES[$input]["tmp_name"]); 
            if( !empty($this->getW()) &&  !($dim[0]==$this->getW() && $dim[1]==$this->getH()) ){
              $content_msg="La taille du fichier doit etre au maximum ".$this->getW()."px  x ".$this->getH()."px !";
             $succees=0;

            }else{
                   //téplacer vers le dosier cible
                if(move_uploaded_file($_FILES[$input]["tmp_name"], $this->getChemin()."/".$this->getNom().".".$this->getExt())){
                  $succes=1;
                  $content_msg="Votre fichier a été téléchargé avec succès!";
                }else{//if(move_uploaded_file
                   $succes=0;
                   $content_msg="Erreur de téléchargement de votre fichier !";
                }

            }
           
          }//if($filesize > $maxsize){

       }// if(!array_key_exists($ext,  $Tab_ext)){


     

      }else{

        $content_msg="Error: " . $_FILES[$input]["error"];
        $succes=0;

      }//
      $resultat[0]=$content_msg;
      $resultat[1]=$succes;
      return $resultat;
    }//Fin import

    
    
}
