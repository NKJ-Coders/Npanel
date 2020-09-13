<form class="form-horizontal" action="index.php?action=Entreprise&saction=add" method="POST" enctype="multipart/form-data">
	        <div class="form-row">
			<div class="form-group col-md-6">
		             <label class="control-label col-sm-2" for="code">Nom:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" placeholder="Entrez le nom de l'entreprise" style="width:300px;border-radius:8px" name="nom" required>
		             </div>
	        </div>
	
			
	          <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Slogan:</label>
		              <div class="col-sm-10">
			          <input type="text" class="form-control" id="slogan" style="width:300px;border-radius:8px" placeholder="Entrez le slogan de l'entreprise" name="slogan" required>
		              </div>
	         </div>
			 </div>
			 
	        
			 
			 <div class="form-row">
			
	         <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Pays:</label>
		              <div class="col-sm-10">
			          <input type="text" class="form-control" id="pays" style="width:300px;border-radius:8px" placeholder="Renseignez le pays de l'entreprise" name="pays" required>
		              </div>
	         </div>
	         <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Ville:</label>
		              <div class="col-sm-10">
			          <input type="text" class="form-control" id="ville" style="width:300px;border-radius:8px" placeholder="Renseignez la ville de l'entreprise" name="ville" required>
		              </div>
	         </div>

	          <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Adresse:</label>
		              <div class="col-sm-10">
			          <input type="text" class="form-control" id="adresse" style="width:300px;border-radius:8px" placeholder="Renseignez l'adresse de l'entreprise " name="adresse" required>
		              </div>
	         </div>
	         
			 <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Site:</label>
		              <div class="col-sm-10">
			          <input type="text" class="form-control" id="ville" style="width:300px;border-radius:8px" placeholder="Renseignez le site web de l'entreprise" name="site_web" required>
		              </div>
	         </div>
	
	
			
			 </div>

			  <div class="form-row">
			 <div class="form-group col-md-6">
		              <label class="control-label col-sm-2" for="code">Plaquette:</label>
		              <div class="col-sm-10">
			          <input type="file" class=" fileinput-button" name="plaquette" >
				      </div>
	         </div>
			 	 <div class="form-group col-md-6">
				      <label class="control-label col-sm-2" for="image">Logo:</label>
				      <div class="col-sm-10">
				        <input type="file" class=" fileinput-button" id="icone" name="logo" required >
				      </div>
	         </div>
			
			 </div>
			   <div class="form-row">
			   	 <div class="form-group col-md-12">
				       <label class="control-label col-sm-12" for="image">Breve présentation de l'entreprise:</label>
				      <div class="col-sm-12" >
				      	<textarea class="col-sm-12" rows="5" name="description">
				      		
				      	</textarea>
				      
				      </div>
	         	</div>
			   </div>
	    				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	