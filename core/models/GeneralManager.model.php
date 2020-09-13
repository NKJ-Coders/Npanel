<?php 
ABSTRACT class GeneralManager extends db {
    
    public function getAllData($table,$obj){
        $this->getBbd(); // connexion à la base de donnees 
        return $this->getAllinSysteme($table,$obj);
    }

    Public function AddData($table,$param){
  		$this->getBbd();
		return $this->Addn($table,$param);

	}


	Public function getAllDataByParam($table,$param,$obj){
		$this->getBbd();
		return $this->GetAlln($table,$param,$obj);
	}

	Public function ChangeStatut($table,$online,$id){
		$this->getBbd();
		return $this->UpdateOnlineById($table,$online,$id);
	}

	Public function getOneColbyOneCol($table,$cols,$col,$val){
		$this->getBbd();
		return $this->getOneColbyCol($table,$cols,$col,$val);
	}

	Public function updateDataById($table,$id,$param){
		$this->getBbd();
		return $this->UpdatenById($table,$id,$param);
	}

	Public function getMaxDataId($table){
		$this->getBbd();
		return $this->getMaxId($table);
	}




 

}