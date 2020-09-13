<!-- Description -->
<div class="col-12 editor">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Nom du <strong><?= str_replace("_", " ", $action) ?></strong></h5>
				<hr>
				
				<?php if(!empty($titre )){ ?>

				<p><?= str_replace("\'", "'", $titre)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button>
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
							Ajouter son nom
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>

	<form id="form_editor" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le nom du <strong><?= str_replace("_", " ", $action) ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 500px;">
							<input type="text" name="titre" class="form-control" value="<?= (!empty($titre )) ? trim($titre) : '' ?>">
						
						</div>
						<div class="col-12" style="text-align:center; margin-top:50px;">
							<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
									Valider
							</button>
							<button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>

						</div>

					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- Resumé -->

	<!-- Description -->
	<div class="col-12 editor_resume">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Resumé du <strong><?= str_replace("_", " ", $action) ?> </strong></h5>
				<hr>
				
				<?php if(!empty($resume )){ ?>

				<p><?= str_replace("\'", "'", $resume)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button> 
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-info" id="ts-info">
							Ajouter un bref resume 
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>

	<form id="form_editor_resume" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le resumé du  <strong><?= str_replace("_", " ", $action) ?> </strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="myeditor"  placeholder="<?php if(empty($resume )){ echo 'Saisir votre texte ici'; } ?>" name="resume" class="form-control"><?php if(!empty($resume )){ ?><?= trim($resume) ?><?php } ?></textarea> 
						</div>
						<div class="col-12" style="text-align:center; margin-top:50px;">
							<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
									Valider
							</button>
							<button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>

						</div>

					</div>
				</div>
			</div>
		</div>
	</form>


	