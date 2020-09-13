
<form class="form-horizontal" action="index.php?action=Prestation&saction=add&type=<?= $type?>" method="POST" enctype="multipart/form-data">
      <span style="text-align: center;"><h4>Nouvelle Solution</h4></span><br/>

      <label for="inputTitre">Solution parent</label>
     <select class="form-control" name="id_parent"> 
        <option value="0"> Pas  parent</option>

        <?php foreach ($data as $key => $value) { ?>
          <?php if($value->getType()==$type){ ?>
          <option value=<?= $value->getId()?>> <?= $value->getTitre(); ?></option>.
          <?php } ?>
         <?php } ?>
        
      </select>

      <div class="form-group">
        <label for="inputTitre">Titre</label>
        <input type="text" class="form-control" id="text-titre" name="titre"  placeholder="Titre de la solution" required>
      </div>

      <div class="form-group">
         <label for="resume">Resumé</label>
         <textarea class="form-control" rows="3" id="text-resume" name="resume" placeholder="Resumé de votre service">
         </textarea>
      </div> 

      <div class="form-group">
         <label for="description">Déscription</label>
         <textarea class="form-control" rows="3" id="text-description" name="description" placeholder="Déscription de votre solution">
         </textarea>
      </div> 

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Ajoutez une image</label>
            <input type="file" class=" fileinput-button" id="image" name="image" >
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
</form>





  