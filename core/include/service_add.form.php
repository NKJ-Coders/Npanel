

<form class="form-horizontal" action="index.php?action=Prestation&saction=add&type=<?= $type?>" method="POST" enctype="multipart/form-data">
      <span style="text-align: center;"><h4><?=(empty($id))?"Nouveau service":"Nouveau sous-service de ".ucfirst(strtolower($titre_parent)) ?></h4></span><br/>
     <?php if(isset($id)){  ?>
      <input type="hidden" name="id_parent" value="<?= $id ?>">
      <?php } ?>
     


      <div class="form-group">
        <label for="inputTitre">Titre</label>
        <input type="text" class="form-control" id="text-titre" name="titre"  placeholder="Titre service" required>
      </div>

       <select class="form-control" name="icone"> 
        <option value="<?= null ?>">Pas d'icone</option>
        <option value='<i class="fa fa-user" style="color:#fff"></i>'> icone</option>
       
         </select>

      <div class="form-group">
         <label for="resume">Resumé</label>
         <textarea class="form-control" rows="3" id="text-resume" name="resume" placeholder="Resumé service">
         </textarea>
      </div> 

      <div class="form-group">
         <label for="description">Déscription</label>
         <textarea class="form-control" rows="3" id="text-description" name="description" placeholder="Déscription service">
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





  