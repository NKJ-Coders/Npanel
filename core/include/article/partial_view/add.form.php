<form class="form-horizontal" action="index.php?action=<?= $action ?>&saction=add" method="POST" >
	
	        <div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-6">
					<label class="control-label col-sm-2" for="code">Titre:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="valeur" placeholder="Entrez le titre" style="width:300px;border-radius:8px" name="titre" required>
					</div>
				</div>
				<?php
					$param=[];
					$param[0]['col']='online';
					$param[0]['val']=1;
					$data_theme=$this->getAllByParam('Theme_blog', $param);
				?>
				<div class="form-group col-6"   style="width: 200px;">
					<label class="control-label col-sm-2" for="code">Thème:</label>
					<select id="type" class="form-control" name="id_theme" style="width:300px;border-radius:8px">
						<?php foreach($data_theme as $key => $value) : ?>
							<option value="<?= $value->getId() ?>"><?= $value->getTitre() ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-row" style="padding-left:10px">
				<div class="form-group col-md-5">
					<label class="control-label col-sm-5" for="resume">Date creation:</label>
					<input type="date" name="date_creation" class="form-control">
				</div>
			</div>
	   				 
                <hr>
		     <div style="float: right; padding-right:15px; padding-bottom:15px">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
				<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			</div>
</form>
	