<form class="form-horizontal" action="index.php?action=Presentation&saction=add" method="POST" enctype="multipart/form-data">
	        <div class="form-group">
		             <label class="control-label col-sm-2" for="code">Rubrique:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="rubrique" placeholder="Entrez une rubrique pour la presentation" style="width:700px;border-radius:8px" name="rubrique" required>
		             </div>
	        </div>
	
	        <div class="form-group">
		             <label class="control-label col-sm-2" for="code">Description:</label>
		             <div class="col-sm-10">
			         <textarea type="textarea" class="form-control" id="description" placeholder="Décrivez votre présentation" rows="10" style="width:700px;border-radius:8px" name="description" required>
					 </textarea>
		             </div>
	         </div> 
	
	     
	        
				    				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
		     	<button type="submit" class="btn btn-primary">Ajouter</button>
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				
			</div>
</form>
	