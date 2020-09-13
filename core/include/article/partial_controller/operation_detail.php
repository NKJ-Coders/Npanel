<?php 
if($saction=="Detail"){
	$data=[];
	$param = [];
	$param[0]['col']='id';
	$param[0]['val']=$id;
	$data = $this->getAllByParam($action, $param);

	$data_theme = $this->AllData('theme_blog');

	$titre= $data[0]->getTitre();
	$id_theme= $data[0]->getId_theme();
	$resume=$data[0]->getResume();
	$contenu = $data[0]->getContenu();
	// $date_creation = date_format(date_create($data[0]->getDate_creation()), 'd F Y');
	$date_mj = $data[0]->getDate_mj();
	$auteur = $data[0]->getAuteur();
	$source = $data[0]->getSource();

	$param=[];
	$param[0]['col']='id_article';
	$param[0]['val']=$data[0]->getId();
	$data_illustration=$this->getAllByParam('illustration_article', $param);
	
	$theme = $this->getColsByCol('theme_blog', 'titre', 'id', $id_theme);

	if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

	if(!empty($ssaction)) {
		// Mise a jour des differents champs
		extract($_POST);

		if($ssaction=='update'){
			if(isset($titre)){
				$param=[];
				$param[0]['col']='titre';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($titre));
				$this->updateParamById($action, $param, $id);
			
			}
			if(isset($id_theme)){
				$param=[];
				$param[0]['col']='id_theme';
				$param[0]['val']=(int)$id_theme;
				$this->updateParamById($action, $param, $id);
			
			}
			if(isset($contenu)){
				$param=[];
				$param[0]['col']='contenu';
				$param[0]['val']=str_replace("'", "\'", $contenu);
				$this->updateParamById($action, $param, $id);
			}
			if(isset($resume)){
				$param=[];
				$param[0]['col']='resume';
				$param[0]['val']=str_replace("'", "\'", $resume);
				$this->updateParamById($action, $param, $id);
			}
			if(isset($auteur)){
				$param=[];
				$param[0]['col']='auteur';
				$param[0]['val']=str_replace("'", "\'", htmlspecialchars($auteur));
				$this->updateParamById($action, $param, $id);
			}
			if(isset($source)){
				$param=[];
				$param[0]['col']='source';
				$param[0]['val']=htmlspecialchars(trim($source));
				$this->updateParamById($action, $param, $id);
			}
			if(isset($date_mj)){
				$param=[];
				$param[0]['col']='date_mj';
				$param[0]['val']=$date_mj;
				$this->updateParamById($action, $param, $id);
			}
			// traitement des fichiers
			if(isset($_FILES)){
				$size=30*1024*1024;
				// recherche du nom de l'article
				$nom_article=$this->getColsByCol($action, 'titre', 'id', $id);
				$maxId= $this->GetMaxId('illustration_article')+1;
				// insert image
				if(isset($_FILES['image']) && !empty($_FILES['image'])){
					if($_FILES['image']['error']==0 && $_FILES['image']['size'] <= $size){
						$file_name = $_FILES['image']['name'];
						$file_tmp_name = $_FILES['image']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.png', '.jpg', '.jpeg');

						if(in_array($file_extension, $tab_extension)){
							// $dim= getimagesize($_FILES['image']["tmp_name"]);
							// if(!($dim[0]==350 && $dim[1]==750) ){
								if(move_uploaded_file($file_tmp_name, $destination)){
									$param=[];
									$param[0]['col']='lien';
									$param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
									$param[1]['col']='id_article';
									$param[1]['val']=(int)$id;
									$param[2]['col']='type';
									$param[2]['val']='Image';
									$param[3]['col']='online';
									$param[3]['val']=1;
									
									if(empty($this->getAllByParam('illustration_article',$param))){
										$resultat=$this->Add('illustration_article', $param); 
									}
								}
							// }
						}
					}
				}
				// insert video
				if(isset($_FILES['video']) && !empty($_FILES['video'])){
					if($_FILES['video']['error']==0){
						$file_name = $_FILES['video']['name'];
						$file_tmp_name = $_FILES['video']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.mp4');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
								$param[1]['col']='id_article';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='Video';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_article',$param))){
									$resultat=$this->Add('illustration_article', $param); 
								}
							}
						}
					}
				}
				// insert Doc
				if(isset($_FILES['plaquette']) && !empty($_FILES['plaquette'])){
					if($_FILES['plaquette']['error']==0 && $_FILES['plaquette']['size'] <= $size){
						$file_name = $_FILES['plaquette']['name'];
						$file_tmp_name = $_FILES['plaquette']['tmp_name'];
						$file_extension = strrchr($file_name, '.');
						$file_extension = strtolower($file_extension);
						$destination = '../panessitV14/img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;

						$tab_extension = array('.pdf');

						if(in_array($file_extension, $tab_extension)){
							if(move_uploaded_file($file_tmp_name, $destination)){
								$param=[];
								$param[0]['col']='lien';
								$param[0]['val']='img/blog/'.formaterNameFile($nom_article).'_'.$maxId.$file_extension;
								$param[1]['col']='id_article';
								$param[1]['val']=(int)$id;
								$param[2]['col']='type';
								$param[2]['val']='Plaquette';
								$param[3]['col']='online';
								$param[3]['val']=1;
								if(empty($this->getAllByParam('illustration_article',$param))){
									$resultat=$this->Add('illustration_article', $param); 
								}
							}
						}
					}
				}
			}
		}
		
	}
	
}