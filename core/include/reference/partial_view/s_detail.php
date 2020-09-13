<!-- Type -->
<div class="col-12 editor_type">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Type</h5>
			<hr>
			
			<?php if(!empty($type )){ ?>

			<p><?= $type  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter son type
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_type" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Choisir le type
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 200px;">
						<select id="Type" class="form-control" name="type" style="width:300px;border-radius:8px">
							<option value="Chiffre" <?= ($type=='Chiffre')?'selected':'' ?>>Chiffre</option>
							<option value="Client" <?= ($type=='Client')?'selected':'' ?>>Client</option>
							<option value="Partenaire" <?= ($type=='Partenaire')?'selected':'' ?>>Partenaire</option>
		            	</select>
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
<!-- Type -->

<!-- Nom -->
<div class="col-12 editor">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom du <strong><?= $type ?></strong></h5>
			<hr>
			
			<?php if(!empty($nom )){ ?>

			<p><?= str_replace("\'", "'", $nom)  ?></p>
	
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
						Editer le nom du <strong><?= $type ?></strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="nom" class="form-control" value="<?= (!empty($nom )) ? trim($nom) : '' ?>">
					
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
<!-- nom -->

<!-- Date référence -->
<div class="col-12 editor_date_ref">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Date de référence</h5>
			<hr>
			
			<?php if(!empty($date_reference )){ ?>

			<p><?= $date_reference  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la date de référence
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_date_ref" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Renseignez la date de référence
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="date" name="date_reference" class="form-control" value="<?= $date_reference ?>">
					
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
<!-- Date reference -->

<?php if($type=='Chiffre'){ ?>
	<!-- Chiffre -->
	<div class="col-12 editor_chiffre">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($chiffre )){ ?>

				<p><?= $chiffre  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button>
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
							Ajouter le Chiffre
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>


	<form id="form_editor_chiffre" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le <strong><?= $type ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 150px;">
							<input type="number" name="chiffre" class="form-control" value="<?= (!empty($chiffre )) ? trim($chiffre) : '' ?>">
						
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
	<!-- Chiffre -->
<?php } ?>

<?php if($type!='Chiffre'){ ?>
	<!-- Description -->
	<div class="col-12 editor_resume">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Description du <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($description )){ ?>

				<p><?= str_replace("\'", "'", $description)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button> 
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-info" id="ts-info">
							Ajouter la description 
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>

	<form id="form_editor_resume" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&ssaction=update&id=<?= $id?>" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer la description du <?= $type ?> <strong><?= $nom ?> </strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 100%;height:200px">
							<textarea  id="myeditor"  placeholder="<?php if(empty($description )){ echo 'Saisir votre texte ici'; } ?>" name="description" class="form-control"><?php if(!empty($description )){ ?><?= trim($description) ?><?php } ?></textarea> 
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

	<!-- Site web -->
	<div class="col-12 editor_site">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Site web du <strong><?= $type ?></strong></h5>
				<hr>
				
				<?php if(!empty($site_web )){ ?>

				<p><?= str_replace("\'", "'", $site_web)  ?></p>
		
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
						Modifier
					</button>
				</div>
				<?php }else{?>
					<div class="col-md-3 col-sm-12 ">
						<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
							Ajouter son site web
						</button>
					</div>
				<?php } ?>

					
		
			</div>
		</div>
	</div>

	<form id="form_editor_site" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							Editer le site web du <strong><?= $type ?></strong>
						</h4>
						<!-- Create the editor container -->
						<div class="form-group col-12"   style="width: 500px;">
							<input type="text" name="site_web" class="form-control" value="<?= (!empty($site_web )) ? trim($site_web) : '' ?>">
						
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
	<!-- site_web -->


	<!-- Piece jointe-->
	<div class="card">
		<div class="card-body">
		<h5 class="card-title"> Pièces jointes  du <?= $type ?> <strong><?= $nom ?> </strong></h5>
		<hr>
			<!-- image -->
			<div class="row el-element-overlay">
			<?php if(!empty($img)){ ?>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="el-card-item">
							<div class="el-card-avatar el-overlay-1"> <img src="/panessitV14/<?= $img ?>" alt="user" />
								<div class="el-overlay">
									<ul class="list-style-none el-info">
										<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
										<li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="el-card-content">
								<h4 class="m-b-0">Image</h4>
							</div>
						</div>
					</div>
				</div>
		
			<?php } ?>

	
			<!-- Plaquete pdf-->
		
			<?php if(!empty($plaquette)){ ?>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="el-card-item">
							<div class="el-card-avatar el-overlay-1"> <img src="../img/icone_pdf.png" style="height:100px; width:auto"  alt="user" />
								<div class="el-overlay">
									<ul class="list-style-none el-info">
										<li class="el-item"><a class="btn default btn-outline el-link" href="../<?= $plaquette?>" target="_blank"><i class="mdi mdi-magnify-plus"></i></a></li>
										<li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="el-card-content">
								<h4 class="m-b-0">Plaquette</h4>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		
			<!-- Video-->
	
			<?php if(!empty($video)){ ?>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="el-card-item">
							<div class="el-card-avatar el-overlay-1"> <img src="<?= $video ?>" alt="user" />
								<div class="el-overlay">
									<ul class="list-style-none el-info">
										<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?= $video ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
										<li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="el-card-content">
								<h4 class="m-b-0">Video</h4>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php if(empty($img) or empty($plaquette) or empty($video)){ ?>
			<div class="col-md-3 col-sm-12" id="AddPj">
				<div class="btn-group">
						<button type="button" class="btn btn-primary">Nouvelle Pièce jointe</button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu">
						<?php //if(empty($img)){ ?>
							<a id="addImg" class="dropdown-item" href="#">Image illustrative</a>
						<?php //} ?>
						<!-- <div class="dropdown-divider"></div> -->
						<?php //if(empty($plaquette)){ ?>
							<!-- <a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a> -->
						<?php //} ?> 
						<!-- <div class="dropdown-divider"></div> -->
						<?php //if(empty($video)){ ?>
							<!-- <a id="addVideo" class="dropdown-item" href="#">Video illustrative</a> -->
						<?php //} ?>
						</div>
					</div><!-- /btn-group -->
				
			</div>
			<?php } ?> 
			<?php if(isset($response) && !empty($response)) { ?>
				<div class="col-md-12 text-danger">
					<?php if(!empty($response[0])){ echo "<p>".$response[0]."</p>"; } ?>
					<?php if(!empty($response[1])){ echo "<p>".$response[1]."</p>"; } ?>
				</div>
			<?php } ?>
			<div class="col-md-12 col-sm-12" id="DivFormAddPj">
				<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
					<div class="form-group row">
							<div class="col-md-8">
								<div id="importImg" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
									<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png *.jpg *.jpeg </label>
									
								</div>
								<div id="importPlaqt" class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette">
									<label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf ... </label>
									
								</div>
								<div id="importVideo" >
									<div class="form-group row">
											<div class="col-sm-12">
												<input  type="text" name="video" class="form-control" id="fname" placeholder="Saisir le lien youtube de votre video">
											</div>
										</div>
									
								</div>
							</div>
					
						<div class="col-md-4">
							<button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
									Valider
							</button>
							<button type="button" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
								Annuler
							</button>
						</div> 
					</div>
				</form>
		
			
			</div>
			

			</div>

		</div>
	</div>
	<?php } ?>