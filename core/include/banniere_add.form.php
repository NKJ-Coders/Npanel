<form class="form-horizontal" action="index.php?action=Banniere&saction=add" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_entreprise" value="1">
    <label for="inputTitre">Position</label>
    <select class="form-control" name="position" required>
	     <option value="home">Home Page </option>
	     <option value="second">Second Page</option>  
    </select>

    <div class="form-group">
        <label for="inputTitre">Texte 1</label>
        <input type="text" class="form-control" id="text-texte1" name="texte1" placeholder="Saisir le premier texte de la bannière " required>
    </div>

    <div class="form-group">
        <label for="inputTitre">Texte 2</label>
        <input type="text" class="form-control"  id="text-texte2" name="texte2" placeholder="Saisir le deuxieme texte de la bannière">
    </div>

    <div class="form-group">
        <label for="inputTitre">Texte 3</label>
        <input type="text" class="form-control"  id="text-texte3" name="texte3" placeholder="Saisir le troisieme texte de la bannière">
    </div>

    
    <div class="form-group col-md-6">
              <label class="control-label col-sm-2" for="image">Image:</label>
              <div class="col-sm-10">
                <input type="file" class=" fileinput-button" id="image" name="image" required >
              </div>
           </div>
  
    
    <div style="float: right;">
	  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
      <button type="submit" name="submit" id="submit" value="add" class="btn btn-primary">valider</button>
    </div>
    <div class="form-group"> 
  </div>     
</form>

  