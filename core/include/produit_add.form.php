  <?php 
	 $Categorie = NEW CategorieManager();
	 $param[0]['col']='id_parent';
	 $param[0]['val']=0;
	 $tab_cat=$Categorie->getAllDataByParam("categorie",$param,"Categories");

     $Marque= NEW MarqueManager();
     $tab_marque=$Marque->getAllData("marque","marques");

 ?>
 <?php if(!empty($tab_cat)){ ?>
  <?php if(!empty($tab_marque)) {?>
  <div class="card"> 
    <form class="form-horizontal" action="index.php?action=Produit&saction=add" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Informations Produits</h4>
              <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-right control-label col-form-label">Catégorie</label>
                
                <div class="col-md-9">
                    <select required class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_cat">
                        <option value="">Selectionner</option>
                        <?php foreach ($tab_cat as $key => $value) {?>
                        	<?php 
                        		 $id_parent=$value->getId(); 
	                        	 $param[0]['col']='id_parent';
								 $param[0]['val']=$id_parent;
								 $tab_scat=$Categorie->getAllDataByParam("categorie",$param,"Categories");

							?>
							<?php if(!empty($tab_scat)){ ?>
                        	<optgroup label="<?= $value->getNom(); ?>">
                        	
							<?php foreach ($tab_scat as $key1 => $value1) {?>
	                            <option value="<?= $value1->getId() ?>">
	                            	<?= $value1->getNom(); ?>
	                            		
	                            </option>
	                           
                             <?php } ?>
                        </optgroup>
                         <?php } ?>
                        <?php } ?>
                       
                      
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input required  type="text" class="form-control" id="fname" placeholder="Le nom du produit" name="nom">
                </div>
            </div>

            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Marque</label>
                <div class="col-sm-9">
                    <select required class="select2 form-control custom-select" style="width: 100%; height:36px;" name="marque">

                    	<option value="">Selectionner</option>
                        <?php foreach ($tab_marque as $key => $value) {?>
                                <option value="<?= $value->getNom()?>">
                                    <?= $value->getNom(); ?>     
                                </option>
                        <?php }  ?>

                    </select>
                </div>
            </div>
           
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image1" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Importer une image jpg 203 x 260 px...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="border-top">
            <div class="card-body" style="text-align:right;">
                <button type="submit" class="btn btn-primary">Valider</button>
                 <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
            </div>

        </div>
    </form>
</div>
<?php }else{ ?>
<div style="font-size:18px;text-align:center"> 
    <span >
        <i class="mdi mdi-emoticon-dead"></i>
        Impossible d'ajouter un produit dans le catalogue:  <a href="index.php?action=Marque">Bien vouloir créer une marque</a>
    </span>
</div>
<?php } ?>
<?php }else{ ?>
<div style="font-size:18px;text-align:center"> 
	<span >
		<i class="mdi mdi-emoticon-dead"></i>
		Impossible d'ajouter un produit dans le catalogue:  <a href="index.php?action=Categorie">Bien vouloir créer une catégorie</a>
	</span>
</div>
<?php } ?>


	