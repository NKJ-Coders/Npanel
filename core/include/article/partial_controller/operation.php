<?php 
foreach ($Tab_value_saction as $key => $value) {
	if(strtolower($saction)== strtolower($value)){
	  $file_operation_by_saction=$root.'operation_'.strtolower($value).".php";
	  if(file_exists($file_operation_by_saction)){
	      require_once($file_operation_by_saction);
	  }else{
	     header("Location:index.php?action=Error404");
	  }
	}
}