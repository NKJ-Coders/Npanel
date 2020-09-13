<form class="form-horizontal" action="index.php?action=Contact&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
			<div class="form-group col-md-6">
		             <label class="control-label col-sm-2" for="Type">Type:</label>
					 <select id="Type" class="form-control" name="type" style="width:300px;border-radius:8px">
					    <option value="Tel">Clients</option>
					    <option value="Email">Email</option>
					    <option value="BP">Boîte postale</option>
		            </select>
		     </div>
	        <div class="form-group col-md-6">
		             <label class="control-label col-sm-2" for="code">Valeur:</label>
		             <div class="col-sm-10">
			         <input type="text" class="form-control" id="valeur" placeholder="Entrez le contact" style="width:300px;border-radius:8px" name="valeur" required>
		             </div>
	         </div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	