<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$titre= $data[0]->getTitre();
	$resume=$data[0]->getResume();

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		extract($_POST);
		if(isset($titre)){
			$param=[];
			$param[0]['col']='titre';
			$param[0]['val']=str_replace("'", "\'", $titre);
			$this->updateParamById($action, $param, $id);
		}
		if(isset($resume)){
			$param=[];
			$param[0]['col']='resume';
			$param[0]['val']=str_replace("'", "\'", $resume);
			$this->updateParamById($action, $param, $id);
		}
	}
}