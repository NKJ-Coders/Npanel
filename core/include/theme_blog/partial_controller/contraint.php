<?php
//Contraint table 
$Tab_name_fille_contraint=array('permissiion.php','geturl.php','contraintvalueurl.php');
foreach ($Tab_name_fille_contraint as $key => $value) {

 $file=$root.$value;
 if(file_exists($file)){
    require_once($file);
 }else{
    header("Location:index.php?action=Error404");
 }
 
}