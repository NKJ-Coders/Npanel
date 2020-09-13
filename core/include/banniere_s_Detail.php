<?php if(!empty($data)){ ?>

<?php
$texte1=$data[0]->getTexte1();
$texte2=$data[0]->getTexte2();
$texte3=$data[0]->getTexte3();
$banniere=$data[0]->getPhoto(); 
$position=$data[0]->getPosition();

?>

<!-- Description -->
<div class="col-12 editor">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Texte bannière <?= $position ?> Page</strong></h5>
            <hr>
            <div class=" col-12 row">
                <div class="col-md-4">
                    <strong>Texte 1</strong>:<br> <?= str_replace("\'", "'", $texte1)  ?>
                </div>
                <div class="col-md-4">
                    <strong>Texte 2</strong>: <br> <?= str_replace("\'", "'", $texte2)  ?>
                </div>
                <div class="col-md-4">
                    <strong>Texte 3</strong>: <br> <?= str_replace("\'", "'", $texte3)  ?>
                </div>
            </div><br><br>
       
           <div class="col-md-3 col-sm-12 ">
             <button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
             	Modifier
         	</button>
           </div>
   

                
      
        </div>
    </div>
</div>

<form id="form_editor" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id ?>&ssaction=update" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Editer le texte 1 de la bannière <strong></strong>
                    </h4>
                    <!-- Create the editor container -->
                    <div class="form-group col-12" >
                    <input  type="text" style="background-color:#ccc"  required name="texte1" value="<?= $texte1 ?>"  class="form-control">
                    </div>
                    <div class="form-group col-12" >
                    <input  type="text" style="background-color:#ccc"  required name="texte2" value="<?= $texte2 ?>"  class="form-control">
                    </div>
                    <div class="form-group col-12" >
                    <input  type="text" style="background-color:#ccc"  required name="texte3" value="<?= $texte3 ?>"  class="form-control">
                    </div>
                    <div class="col-12" style="text-align:center; margin-top:50px;">
                         <button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
                                Valider
                        </button>
                        <button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
                              Annuler
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Resumé -->




<!-- Piece jointe-->
<div class="card">
    <div class="card-body">
    <h5 class="card-title"> Image bannière </h5>
    <hr>
        <!-- image -->
        <div class="row el-element-overlay">
        <?php if(!empty($banniere)){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="../<?= $banniere ?>" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $banniere ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Banièrre <?= $position  ?> page</h4>
                        </div>
                    </div>
                </div>
            </div>
    
        <?php } ?>

 
       
   
         <div class="col-md-3 col-sm-12" id="AddPj">
               <div class="btn-group">
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                    
                        <a id="addImg" class="dropdown-item" href="#">Modifier bannière</a>
                 
                     
                    </div>
                </div><!-- /btn-group -->
              
        </div>
      
        <div class="col-md-12 col-sm-12" id="DivFormAddPj">
            <form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
                 <div class="form-group row">
                        <div class="col-md-8">
                            <div id="importImg" class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                                <label class="custom-file-label" for="validatedCustomFile">Modifier bannière  *.png de taille <?= $h."x".$w ?> px ... </label>
                                
                            </div>
                            
                        </div>
                   
                    <div class="col-md-4">
                        <button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
                                Valider
                        </button>
                        <button type="button" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
                              Annuler
                        </button>
                    </div> 
                </div>
            </form>
      
          
        </div>
        

        </div>

    </div>
</div>
<?php } ?>

