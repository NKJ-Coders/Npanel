<?php

// afficher la variable }type qui posse le type de prestation

$form_type_to_import="core/include/".strtolower($type)."_add.form.php";
if(file_exists($form_type_to_import)){
 
	require($form_type_to_import);

}else{

       echo" <div style='background-color:#fff; text-align:center'>";
       echo"<h2><span style='color:red'><i class='fas fa-frown'></i> </span>Cette page n'existe pas! </h2>";
       echo"</div>";
}


