<?php
//Changement de statut
if(!empty($id)){
	$this->ChangerStatut($action,$saction,$id);
    header("Location:index.php?action=".$action);
}else{
	 header("Location:index.php?action=Error404");
}

