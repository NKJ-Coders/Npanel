<?php 
//définition de param
$param=$this->getParam();
// eviter les doublons sur le nom de photo
if(empty($this->getAllByParam($action,$param))){
	$resultat=$this->Add($action,$param); 
}else{
	$resultat=0;
}
// message
$msg=$this->getMsg($resultat);


