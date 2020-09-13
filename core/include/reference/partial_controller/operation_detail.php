<?php 
if($saction=="Detail"){
	$data=[];
	$param=[];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$nom = $data[0]->getNom();
	$description = $data[0]->getDescription();
	$date_reference = $data[0]->getDate_reference();
	$chiffre = $data[0]->getChiffre();
	$type = $data[0]->getType();
	$img = $data[0]->getLogo();
	$site_web = $data[0]->getSite_web();


	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		extract($_POST);
		if(isset($nom)){
			$param=[];
			$param[0]['col']='nom';
			$param[0]['val']=str_replace("'", "\'", htmlspecialchars($nom));
			$this->updateParamById($action, $param, $id);
		}
		if(isset($description)){
			$param=[];
			$param[0]['col']='description';
			$param[0]['val']=str_replace("'", "\'", $description);
			$this->updateParamById($action, $param, $id);
		}
		if(isset($type)){
			$param=[];
			$param[0]['col']='type';
			$param[0]['val']=ucfirst(strtolower($type));
			$this->updateParamById($action, $param, $id);
		}
		if(isset($chiffre)){
			$param=[];
			$param[0]['col']='chiffre';
			$param[0]['val']=(int)$chiffre;
			$this->updateParamById($action, $param, $id);
		}
		if(isset($site_web)){
			$param=[];
			$param[0]['col']='site_web';
			$param[0]['val']=htmlspecialchars(trim($site_web));
			$this->updateParamById($action, $param, $id);
		}
		if(isset($date_reference)){
			$param=[];
			$param[0]['col']='date_reference';
			$param[0]['val']=$date_reference;
			$this->updateParamById($action, $param, $id);
		}
		if(isset($_FILES)){
			// taille max de l'image
			$size=30*1024;
			if(!empty($_FILES) && $_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
				$file_name = $_FILES['image']['name'];
				$file_tmp_name = $_FILES['image']['tmp_name'];
				$file_extension = strrchr($file_name, '.');
				$file_extension = strtolower($file_extension);
				$destination = '../panessitV14/img/'.formaterNameFile($file_name);;

				$tab_extension = array('.png', '.jpg', '.jpeg');
				$dim= getimagesize($_FILES['image']["tmp_name"]);

				$response=[];
				if(in_array($file_extension, $tab_extension)){
					if($dim[0]<=350 && $dim[1]<=260){
						if(move_uploaded_file($file_tmp_name, $destination)){
							$param=[];
							$param[0]['col']='logo';
							$param[0]['val']='img/'.formaterNameFile($file_name);
							$this->updateParamById($action, $param, $id);
						}
					} else { $response[0]="Dimension maximale requise 350x260 !"; }
				}else { $response[1]="Extensions du fichier requises *.png *.jpg *.jpeg !"; }
				// return $response;
			}
		}
	}
 } 