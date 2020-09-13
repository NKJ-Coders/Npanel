<?php 
 if(ucfirst($action)=="Accueil" || ucfirst($action)=="Connexion" ){
    
    $menu_0="Dashboard";
     $title_modal =$menu_0;
}
 if(ucfirst($action)!="Accueil" && ucfirst($action)!="Connexion" ){
    $menu_0=ucfirst($action);
    $title_modal =$menu_0;
 }
 if(isset($saction)){
    $menu_1=ucfirst($saction);
    if(isset($type)){
        $title_modal =$type;
    }else{
      $title_modal =$menu_1;  
    }
    
 }

 if(isset($id)){
    $menu_2=$id;

    if(isset($name))$title_modal = $name;
 }

?>

<div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"> <?= ucfirst($title_modal)  ?> </h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item <?php if(!isset($menu_1))echo'active'; ?>" aria-current="page">

                                        <?php
                                            if(isset($menu_1)) echo"<a href='index.php?action=".$menu_0."'>".$menu_0."</a>";
                                            if(!isset($menu_1))echo $menu_0 ;

                                        ?>

                                  

                                   </li>
                                    <?php if(isset($menu_1)){ ?>
                                        <li class="breadcrumb-item <?php if(!isset($menu_2))echo'active'; ?>" aria-current="page">

                                        <?php
                                            if(isset($menu_2)) echo".$menu_1.";
                                            if(!isset($menu_2))echo $menu_1 ;

                                        ?>

                                  

                                   </li>

                                    <?php } ?>
                                    <?php if(isset($menu_2)){ ?>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <?= $title_modal ?>
                                        </li>

                                    <?php } ?>


                                </ol>
                            </nav>
                        </div>

                    </div>
                    <?php if(isset($msg)){ ?>
                    <div class="col-12">
                            <?= $msg ?>
                      
                        
                    </div>  
                    <?php } ?>
                    <?php if(!empty($result_import) && !$result_import[1] ){ ?>
                     <div class="col-5">
                           
                         <span class="badge badge-pill badge-danger" style="font-size:15px">Attention: <?php 
                         echo $result_import[0]; ?></span>
                        
                    </div>
                <?php } ?>
                  
                </div>
