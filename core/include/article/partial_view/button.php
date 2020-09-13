<div class="btn-group">
    <button type="button" class="btn btn-primary btn-sm">
        <a style="color:#fff" href="index.php?action=<?= $action?>&saction=Detail&id=<?= $value->getId() ?><?php if(!empty($type))echo'&type='.$type ?>">
            Détail
        </a>
    </button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
    <?php if($value->getOnline()==0 & $value->getOnline()!=-1){?>

        <a class="dropdown-item" href="index.php?action=<?= $action ?>&saction=PutOnline&id=<?= $value->getId()  ?><?php if(!empty($type))echo'&type='.$type ?>">
        Publier</a>

    <?php } ?>
    <?php if($value->getOnline()==1 & $value->getOnline()!=-1){ ?>

        <a  data-toggle="tooltip" data-placement="top" title="Dépublier" class="dropdown-item" href="index.php?action=<?= $action ?>&saction=PutOffline&id=<?= $value->getId()  ?><?php if(!empty($type))echo'&type='.$type ?>">Dépublier</a>

       <?php } ?>
   
       <?php if( $value->getOnline()!=-1){?>

          <?php if(1==0){ ?>
            <!-- faire un algorithme de reconnaisse des éléments à liste-->
            <a class="dropdown-item" href="index.php?action=<?= $action ?>&saction=List&id=<?= $value->getId()  ?>"> Lister </a>

          <?php } ?>

        <a class="dropdown-item" href="index.php?action=<?= $action ?>&saction=Del&id=<?= $value->getId() ?><?php if(!empty($type))echo'&type='.$type ?>">Supprimer</a>

    <?php } ?>
    <?php if($value->getOnline()==-1) { ?>

        <a class="dropdown-item" href="index.php?action=<?= $action ?>&saction=Del&id=<?= $value->getId() ?><?php if(!empty($type))echo'&type='.$type ?>">Restaurer</a>
    <?php  } ?>
    </div>
</div><!-- /btn-group -->