<?php 

if($saction=='Img'){
    if(isset($_GET['ssaction'])){ $ssaction = $_GET['ssaction']; }
	else { $ssaction = NULL; }

    if(!empty($ssaction)){
        // suppri,er l'image
        if($ssaction=='del'){
            $link=$this->getColsByCol('illustration_article', 'lien', 'id', $id);
            $file='../panessitV14/'.$link;
            // verifie l'existence du fichier
            if(file_exists($file)){
                if(is_file($file)){ // verifie s'il s'agit d'un fichier
                    unlink($file);
                }
            }
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=-1;
            $this->updateParamById('illustration_article', $param, $id);

            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            }
        }

        // depublier l'image
        if($ssaction=='putOffline'){
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=0;
            $this->updateParamById('illustration_article', $param, $id);
            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            }
        }

        // publier
        if($ssaction=='putOnline'){
            $param=[];
            $param[0]['col']='online';
            $param[0]['val']=1;
            $this->updateParamById('illustration_article', $param, $id);
            if(isset($_COOKIE['id_img'])){
                header('Location:index.php?action=Article&saction=Detail&id='.$_COOKIE['id_img'].'#bloc_file');
            }
        }
    }
}
