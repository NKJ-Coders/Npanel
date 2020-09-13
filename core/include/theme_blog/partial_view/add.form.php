<form class="form-horizontal" action="index.php?action=<?= $action ?>&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-12">
				<label class="control-label col-sm-2" for="code">Titre:</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" id="valeur" placeholder="Entrez le titre" style="width:300px;border-radius:8px" name="titre" required>
				</div>
		     </div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	