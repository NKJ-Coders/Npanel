<form class="form-horizontal" action="index.php?action=Reference&saction=add&type=<?=$_GET['type']?>" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
						<label class="control-label col-sm-2" for="code">Nom:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="valeur" placeholder="Entrez le nom de la référence" style="width:300px;border-radius:8px" name="nom" required>
						</div>
				</div>
				<?php if($type=='Client' || $type=='Partenaire') { ?>
					<div class="form-group col-md-6">
							<label class="control-label col-sm-4" for="Type">Site web:</label>
							<input type="text" class="form-control" id="valeur" placeholder="Entrez l'adresse du site web" style="width:300px;border-radius:8px" name="site_web" required>
							
					</div>
				<?php } ?>

				<?php if($type=='Chiffre') { ?>
					<div class="form-group col-md-6">
							<label class="control-label col-sm-2" for="code">chiffre:</label>
							<div class="col-sm-10">
							<input type="number" class="form-control" id="valeur" style="width:300px;border-radius:8px" name="chiffre" required>
							</div>
					</div>
				<?php } ?>
			</div> 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	