<?php 
ABSTRACT CLASS db{
    private static $_bdd;
   

    //Instance de la connexion de la bdd
    private static function setBdd(){
       self::$_bdd = NEW PDO('mysql:host=localhost;dbname=u929660141_panes_4', 'root','' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//pour afficher les erreurs de l'object PDO. Basculer à EXCEPTION pour la version online.
   }
    
    //Recupération de la connexion à la bdd
    protected function getBbd(){
        if(self::$_bdd==null){
            $this->setBdd();
            return self::$_bdd;

        }
    }

/**
* Les insertions
**/
 

        protected function Addn($table,$param){
            $this->getBbd();

            $sql="INSERT INTO ".$table."( ";

            for ($i=0; $i < count($param); $i++) { 

                $col=$param[$i]['col'];
                $sql.=$col;
                if($i< count($param)-1)$sql.=" , ";

               
            }//Fin For

            $sql.=")VALUES(";

             for ($i=0; $i < count($param); $i++) { 

                
                $val=$param[$i]['val'];
                $sql.="'".$val."'";
                if($i< count($param)-1)$sql.=" , ";
               
            }//Fin For

            $sql.=")";
          
           

            $req=self::$_bdd->prepare($sql);
            $req->execute();
            $lastId = self::$_bdd->lastInsertId();
            return $lastId; // $lastId['id'] cette variable contient le dernier id<br>
            $req->closeCursor;


        }                                 

/**
* Les updates
**/

   

    protected function UpdatenById($table,$id,$param){
         if(!empty($param) && is_array($param)){
            $this->getBbd();
                $sql="UPDATE ".$table." SET ";
                for ($i=0; $i <count($param) ; $i++) { 
                    $val=$param[$i]['val'];
                    $col=$param[$i]['col'];
                    if($i==0) $sql.= $col."='".$val."' ";
                    if($i!=0) $sql.= " ,".$col."='".$val."' ";
                }//fin for

                $sql.=" WHERE id='$id'";

                $req=self::$_bdd->prepare($sql);
                return $req->execute();
                $req->closeCursor; 
         }else{
            return 0;
         }
        
        

         
    
    }
    

    protected function UpdateOnlineById($table,$online,$id){
         
        $this->getBbd();
        $req=self::$_bdd->prepare("UPDATE ".$table." SET online ='".$online."' WHERE `id`='$id'");
        return $req->execute();
        $req->closeCursor; 
    
    }

   

   


/**
*  Test des d'existance
**/

#user identify
    protected function IdentifyUser($table,$login, $pwd,$obj){
        $this->getBbd();
        $var=array();
        $req=self::$_bdd->prepare("SELECT * FROM  ".$table." WHERE login = '".$login."' AND password= '".$pwd."'");
        $req->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var[]= NEW $obj($data);
        }
        if(!empty($var)){
            return $var[0];
        }else{
            return $var;
        }
         
        $req->closeCursor;
    }




    
   




    protected function getPasswd($table,$login){
        $this->getBbd();
        $req=self::$_bdd->prepare("SELECT * FROM  ".$table." WHERE login = '".$login."'");
        $req->execute();
        while($data=$req->fetch()){
            return $data['password'];
        }
       
    }

/**
* Récupération des données
**/


    //fonction pour lire les éléments dans une table
    protected function getAll($table,$obj){
        $var=[];
        $req=self::$_bdd->prepare('SELECT * FROM  '.$table.'  ORDER BY id desc');
        $req->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var[]= NEW $obj($data);
        }
       return $var; 
        $req->closeCursor;

    }

 
    
    protected function getAllById($table,$obj,$id){// utilisé à verifier 
        $this->getBbd();
        $var=array();
        $i=0;
        $req=self::$_bdd->prepare('SELECT * FROM  '.$table.' WHERE id='.$id);
        $req->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var[]= NEW $obj($data);
        }
        return $var[0]; 
        
       
        $req->closeCursor;
    }

   
    protected function  getHashPwd($table,$idpersonnel){
        $this->getBbd();
        $var=array();
        $i=0;
        $req=self::$_bdd->prepare("SELECT * FROM  ".$table." WHERE idpersonnel='".$idpersonnel."'");

        $req->execute();
        while($data=$req->fetch()){
            return $data['password'];
        }
        return $var; 
        
       
        $req->closeCursor;
    }

    
protected function GetAlln($table,$param,$obj){
    $this->getBbd();

    $sql="SELECT * FROM  ".$table." WHERE ";
    foreach ($param as $key => $value) {
                 $val=$value['val'];
                 $col=$value['col'];
                if($key==0) $sql.= $col."='".$val."' ";
                if($key!=0) $sql.= " AND ".$col."='".$val."' ";
    }
 

    $req=self::$_bdd->prepare($sql);
    $req->execute();
    $var=array();
    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $var[]= NEW $obj($data);
    }
    return $var;
    $req->closeCursor;
}                                 

    protected function getOneColbyCol($table,$cols,$col,$val){
        $this->getBbd();
        $var=array();
        $i=0;
        $req=self::$_bdd->prepare("SELECT ".$cols." FROM  ".$table." WHERE ".$col." ='".$val."'" );
        $req->execute();
        $resultat="";
        while($data=$req->fetch()){
            $resultat= $data[$cols];
        }
        if(!empty($resultat)){
            return $resultat;
        }else{
            return null;
        }
        $req->closeCursor;
    }


    protected function getMaxId($table){
        $this->getBbd();
        $req=self::$_bdd->prepare("SELECT MAX(id) FROM  ".$table);
        $req->execute();
        while($data=$req->fetch()){
          if(empty( $data[0])){
            return 0;
          }else{
            return  $data[0];
          }
        }
       $req->closeCursor;
    }


 protected function getAllinSysteme($table,$obj){
        $this->getBbd();
        $var=array();
        $sql="SELECT * FROM  ".$table." WHERE Online !=-1 ORDER BY id desc " ;
        $req=self::$_bdd->prepare($sql);
       // echo $sql; exit;
        $req->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var[]= NEW $obj($data);
        }
        return $var;


        $req->closeCursor;
    } 

    protected function getAllinCorbeille($table,$obj){
        $this->getBbd();
        $var=array();
        $req=self::$_bdd->prepare("SELECT * FROM  ".$table." WHERE Online ==-1");
        $req->execute();
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var[]= NEW $obj($data);
        }
        return $var;


        $req->closeCursor;
    } 



 

}