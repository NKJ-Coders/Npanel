<?php 
extract($_POST);

if($_GET['type']=='Client' || $_GET['type']=='Partenaire'){
	// $result=$this->getFile();
	// if(!empty($_FILES) ){
	// 	$size = 30*1024*1024;
	// 	if($_FILES['image']['error']==0 && $_FILES['image']['size']<=$size) {
	// 		$file_name = $_FILES['image']['name'];
	// 		$file_extension = strrchr($file_name, '.');
	// 		$tab_ext = array('.png', '.jpg', '.jpeg');
	// 		$file_tmp_name = $_FILES['image']['tmp_name'];
	// 		$destination = '.../panessitV16/img/reference';

			// if(in_array($file_extension, $tab_ext)){
			// 	if(move_uploaded_file($file_tmp_name, $destination)){
			// 		$nom=str_replace("'", "\'", $nom); 
			// 		$description=str_replace("'", "\'", $description);  
			// 		$file_name = $_FILES['image']['name'];
			// 		$param[0]['col']='type';
			// 		$param[0]['val']=$type;
			// 		$param[1]['col']='nom';
			// 		$param[1]['val']=$nom;
			// 		$param[2]['col']='logo';
			// 		$param[2]['val']='.../panessitV16/img/reference/'.$file_name;
			// 		$param[3]['col']='site_web';
			// 		$param[3]['val']=$site_web;
			// 		$param[4]['col']='description';
			// 		$param[4]['val']=$description;
					//définition de param
					$param=$this->getParam();
					// eviter les doublons sur le nom de photo
					if(empty($this->getAllByParam($action,$param))){
						$resultat=$this->Add($action,$param);
					}else{
						$resultat=0;
					}
				// }else { $resultat=0; }
			// }else{ $resultat=0; }
			// exit;
			
	// 	}
	// }else{
	// 	$resultat = 0;
	// }
}else{
	//définition de param
	$param=$this->getParam();
	// eviter les doublons sur le nom de photo
	if(empty($this->getAllByParam($action,$param))){
		$resultat=$this->Add($action,$param); 
	}else{
		$resultat=0;
	}
}
	// message
	$msg=$this->getMsg($resultat);



// function getFile($input){
// 	if(!empty($input)){
// 	   //Traitement de l'image
// 	   $h=350;//Hauteur
// 	   $w=260;//lageur
// 	   $ext="png";
// 	   $chemin="../img/reference";
// 	   $nom=ucfirst(strtolower($nom));
// 	   $maxpoids=30 * 1024 * 1024;
// 	   $nom=formaterNameFile($nom);
// 	   $Image= NEW Picture($h,$w,$ext,$chemin,$nom,$maxpoids);
// 	   return $Image->import($input);
	
// 	}else{
// 	   return null;
// 	}
//  }

