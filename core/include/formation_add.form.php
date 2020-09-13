<form class="form-horizontal" action="index.php?action=Prestation&saction=add" method="POST" enctype="multipart/form-data">
      <span style="text-align: center;"><h4>Nouvelle Formation</h4></span> 
	 <label for="inputTitre">Module parent</label>
	  <select class="form-control" name="id_parent"> 
        <option value="0"> Pas  de parent</option>

        <?php foreach ($data as $key => $value) { ?>
          <?php if($value->getType()==$type){ ?>
          <option value=<?= $value->getId()?>> <?= $value->getTitre(); ?></option>.
          <?php } ?>
         <?php } ?>
        
      </select>

	  <div class="form-group">
	      <label for="inputTitre">Titre</label>
	      <input type="text" class="form-control" id="text-titre" name="titre" placeholder="Titre de la formation">
	  </div>

	  <div class="form-group">
	    <div class="form-check">
        <div class="radio">
            <label> <input type="radio" name="e_service" required>&nbsp;Formation en ligne</label>
        </div>
        <div class="radio">
            <label> <input type="radio" name="e_service" required>&nbsp;Formation présidentielle</label>
        </div>
      </div>
	  </div>

	  <div class="form-group">
      <label for="resume">Déscription</label>
      <textarea class="form-control" rows="3" id="text-description" name="description" placeholder="Resumé de votre formation">
      </textarea>
    </div> 

    <div class="form-row">
     	<div class="form-group col-md-6">
     	  <label>Durée de la formation</label><!-- password -->
	      <input type="text" class="form-control" id="val-duree" name="duree" placeholder="Durée de la formation">
      </div>

      <div class="form-group col-md-6">
       	<label for="inputTitre">Prix</label><!-- password -->
	      <input type="text" class="form-control" id="val-prix" name="prix" placeholder="Prix de la formation">
      </div>
	  </div>

    <div class="form-group">
      <label for="description">Resumé</label>
      <textarea class="form-control" rows="3" id="text-resume" name="resume" placeholder="Resumé de la formation">
      </textarea>
    </div> 

    <div class="form-row">
      <div class="form-group col-md-6">
          <label>Ajoutez une vidéo</label><br/>
          <input type="file" class=" fileinput-button" id="video" name="video" >
      </div>

      <div class="form-group col-md-6">
          <label>Importer une plaquette</label>
          <input type="file" class=" fileinput-button" id="plaquette" name="plaquette" >
      </div>
    </div>

    <div style="float: right;">
	 		<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
      <button type="submit" name="submit" id="submit" class="btn btn-primary">valider</button>
    </div>
	  <div class="form-group"> 
  </div>    
</form>



  