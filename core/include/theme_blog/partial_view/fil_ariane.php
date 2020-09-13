<?php
$title_modal=ucfirst($action);
$menu_0=ucfirst($action);
if(!empty($saction)){
    if(strtolower($saction)=='detail'){
        $menu_1=$saction;
    }
}
?>
<div class="row">
    <!-- fil de navigation-->
    <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title"> <?= str_replace('_', ' ', ucfirst($action))  ?> </h4>
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
                    <li class="breadcrumb-item active" aria-current="page">
                        <?=$menu_1?>
                    </li>

                    <?php } ?>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /fil de navigation -->
     <!-- affichage message-->
    <?php if(isset($msg)){ ?>
    <div class="col-12"><?= $msg ?></div>  
    <?php } ?>
    <?php if(!empty($result_import) && !$result_import[1] ){ ?>
    <div class="col-5">
        <span class="badge badge-pill badge-danger" style="font-size:15px">Attention: <?php 
         echo $result_import[0]; ?></span>
    </div>
    <?php } ?>
    <!-- affichage message-->
</div>
