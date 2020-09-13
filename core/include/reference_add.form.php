<form class="form-horizontal" action="index.php?action=Reference&saction=add" method="POST" enctype="multipart/form-data">
	<h4><?php if(isset($type)) echo "Nouveau ".$type ?></h4><br>
	 <div class="form-group">
		             <label class="control-label col-sm-2" for="code">Nom:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="nomR" placeholder="Entrez le nom de votre référence" style="width:700px;border-radius:8px" name="nom" required>
		             </div>
	        </div>
		  <?php if(isset($type) && $type!="Chiffre") {?>
	       
			
			<div class="form-group col-md-6">
				      <label class="control-label col-sm-2" for="image">Logo:</label>
				      <div class="col-sm-10">
				        <input type="file" class=" fileinput-button" id="logoR" name="logo" >
				      </div>
	         </div>
			 
	        <div class="form-group">
		             <label class="control-label col-sm-2" for="code">Description:</label>
		             <div class="col-sm-10">
			         <textarea type="textarea" class="form-control" id="descriptionR" placeholder="Décrivez votre référence" style="width:700px;border-radius:8px" name="description" required>
		             </textarea>
					 </div>
	         </div>
	          <?php } ?>
	         <?php if(isset($type) && $type=="Chiffre") {?>
	
	         <div class="form-row" style="padding-left:10px">
			
	        
	         <div class="form-group col-md-6">
				      <label class="control-label col-sm-2" for="image">Chiffre:</label>
				      <div class="col-sm-10">
				        <input type="text" class="form-control" id="chiffre" placeholder="Entrez le nombre de références si vous en avez... (facultatif)" style="width:200px;border-radius:8px" name="chiffre" required >
				      </div>
	         </div>
	        </div>

	       <?php } ?>
	            				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	