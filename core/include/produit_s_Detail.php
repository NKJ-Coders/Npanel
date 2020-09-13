<div class="col-12 editor">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Description du produit <strong><?= $nom_produit ?></strong></h5>
            <hr>
            
            <?php if(!empty($description )){ ?>

            <p><?= str_replace("\'", "'", $description)  ?></p>
       
	           <div class="col-md-3 col-sm-12 ">
	             <button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
	             	Modifier
	         	</button>
	           </div>
       		<?php }else{?>
       			<div class="col-md-3 col-sm-12 ">
		            <button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
		             	Ajouter une description
		         	 </button>
	         	</div>
            <?php } ?>

                
      
        </div>
    </div>
</div>

<form id="form_editor" method="POST" action="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Editer la description du produit <strong><?= $nom_produit ?></strong>
                    </h4>
                    <!-- Create the editor container -->
                    <div class="form-group col-12"   style="width: 100%;height:200px">
                    <textarea  id="editor"   type="text" style="background-color:#ccc"  required name="description" class="form-control">
                        <?php if(empty($description )){ ?>
                        <p>Saisir votre texte ici</p><br>
                        <?php }else{ ?>
                            <?= trim($description) ?>
                        <?php } ?>
                    </textarea> 
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
<div class="card">
<div class="card-body">
<h5 class="card-title"> Image  du produit <strong><?= $nom_produit ?></strong></h5>
<hr>
<div class="row el-element-overlay">
<?php if(!empty($data_img)){ ?>
	<?php for ($i=0; $i < count($data_img) ; $i++) { ?>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="../<?= $data_img[$i] ?>" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $data_img[$i] ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="m-b-0">Image <?= $i+1 ?></h4>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
<?php } ?>

     <?php if(empty($data_img[0])){ ?>
     	    <div class="col-md-3 col-sm-12">
                 <button type="button" class="btn btn-lg btn-block btn-outline-warning" id="ts-warning">Ajouter image 1</button>
            </div>

     <?php } ?>
     <?php if(empty($data_img[1])){ ?>
     	    <div class="col-md-3 col-sm-12">
                 <button type="button" class="btn btn-lg btn-block btn-outline-warning" id="ts-warning">Ajouter image 2</button>
            </div>

     <?php } ?>
     <?php if(empty($data_img[2])){ ?>
     	    <div class="col-md-3 col-sm-12">
                 <button type="button" class="btn btn-lg btn-block btn-outline-warning" id="ts-warning">Ajouter image 3</button>
            </div>

     <?php } ?>

</div>
</div>
</div>
<div class="card">
    
       
               <div class="card-body" id="condition">
                                <h5 class="card-title m-b-0"> Statut du <strong><?= $nom_produit ?></strong></h5></h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Descriptions</th>
                                        <th scope="col">Statuts</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>En stock</td>
                                        
                                           
                                           <?php  if($data[0]->getDisponible()==1){ ?>
                                            <td class="text-success">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td>
                                            <?php }else{?>
                                               <td class="text-warning">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td> 
                                            <?php } ?>
                                        
                                        <td>
                                            <?php  if($data[0]->getDisponible()==1){ ?>
                                                <a href="index.php?condition&action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&stock=0" data-toggle="tooltip" data-placement="top" title="stock épuisé">
                                                </i><i class="mdi mdi-close"></i>
                                            </a> 
                                            <?php }else{?>
                                                 <a href="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&stock=1" data-toggle="tooltip" data-placement="top" title="En stock">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <?php } ?>
                                           
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Page acceuille</td>
                                        
                                           
                                           <?php  if($data[0]->getVitrine()==1){ ?>
                                            <td class="text-success">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td>
                                            <?php }else{?>
                                               <td class="text-warning">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td> 
                                            <?php } ?>
                                        
                                        <td>
                                            <?php  if($data[0]->getVitrine()==1){ ?>
                                                <a href="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&vitrine=0" data-toggle="tooltip" data-placement="top" title="Uniquement page produit">
                                                </i><i class="mdi mdi-close"></i>
                                            </a> 
                                            <?php }else{?>
                                                 <a href="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&vitrine=1" data-toggle="tooltip" data-placement="top" title="Page d'accueille">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <?php } ?>
                                           
                                           
                                        </td>
                                    </tr>
                                    <?php
                                      $Condition=new ConditionnementManager();
                                      $tab_condition=$Condition->getAllData('conditionnement','Conditionnements');
                                    ?>
                                    <?php foreach ($tab_condition as $key => $value) { ?>
                                     <tr>
                                        <td><?= $value->getNom() ?></td> 
                                        
                                           
                                           <?php  if($data[0]->getConditionnement()==$value->getNom()){ ?>
                                            <td class="text-success">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td>
                                            <?php }else{?>
                                               <td class="text-warning">
                                             <i class='mdi mdi-brightness-1'></i>
                                             </td> 
                                            <?php } ?>
                                        
                                        <td>
                                            <?php  if($data[0]->getConditionnement()==$value->getNom()){ ?>
                                                <a href="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&conditionnement=<?= $value->getNom()?>" data-toggle="tooltip" data-placement="top" title="Désaction le mode <?= $value->getNom()?>">
                                                </i><i class="mdi mdi-close"></i>
                                            </a> 
                                            <?php }else{?>
                                                 <a href="index.php?action=Produit&saction=Detail&id=<?= $id?>&ssaction=update&conditionnement=<?= $value->getNom()?>" data-toggle="tooltip" data-placement="top" title="Activer">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <?php } ?>
                                           
                                           
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>


</div>
