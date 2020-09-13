<?php
//session_start();
class Connexion{
    private $_view;// vue qui affiche

    public function  __construct($action){

        if(isset($action)){
               $connect=0;
            if(!empty($_POST['demande_connexion'])){
                 extract($_POST);
                if($login=="admin" && $pwd=="root"){
                     
                     //$_SESSION['connecte']=1;
                  $connect=1; 

                }
             
                   

            }//Fin traitement demande connection

            if(isset($_GET['saction']) && $_GET['saction']=="logout"){
               //session_destroy(); 
                $connect=0;
               header("Location:index.php");


            }
          
            // Vue accueil

            require_once($this->getView($connect));
        }
    }
    public function setView($connect){
   
        if(isset($connect) && $connect==1){
            //Si connecté
            //echo $connect; exit;
            $this->_view="core/views/accueil.view.php";
        }else{
             $this->_view="core/views/authentication.view.php";
        }
        
       

    }

    public function getView($connect){
             $this->setView($connect);
        return $this->_view;
    }


 


}
