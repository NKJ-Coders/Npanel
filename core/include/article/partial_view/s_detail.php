<!-- Type -->
<div class="col-12 editor_type">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Thème</h5>
			<hr>
			
			<?php if(!empty($theme )){ ?>

			<p><?= $theme ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter le theme
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
						<select id="id_theme" class="form-control" name="id_theme" style="width:300px;border-radius:8px">
							<?php foreach($data_theme as $key => $value) : ?>
								<option value="<?= $value->getId() ?>" <?= ($id_theme==$value->getId())?'selected':'' ?>><?= $value->getTitre() ?></option>
							<?php endforeach; ?>
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
<!-- Theme -->

<!-- Nom -->
<div class="col-12 editor">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Nom de <strong>l'<?= $action ?></strong></h5>
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
						Editer le titre de <strong>l'<?= $action ?></strong>
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
<!-- nom -->

<!-- resume -->
<div class="col-12 editor_resume">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Résumé de <strong>l'<?= $action ?></strong></h5>
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
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter un bref résumé
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
						Editer le resume de <strong>l'<?= $action ?></strong>
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
<!-- Resumé -->

<!-- contenu -->
<div class="col-12 editor_contenu">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Contenu de <strong>l'<?= $action ?></strong></h5>
			<hr>
			
			<?php if(!empty($contenu)){ ?>

			<p><?= str_replace("\'", "'", $contenu)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter le contenu
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_contenu" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Editer le contenu de <strong>l'<?= $action ?></strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 100%;height:200px">
						<textarea  id="contenu"  placeholder="<?php if(empty($contenu )){ echo 'Saisir votre texte ici'; } ?>" name="contenu" class="form-control"><?php if(!empty($contenu )){ ?><?= trim($contenu) ?><?php } ?></textarea> 
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
<!-- contenu -->

<!-- auteur -->
<div class="col-12 editor_auteur">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Auteur de <strong>l'<?= $action ?></strong></h5>
			<hr>
			
			<?php if(!empty($auteur )){ ?>

			<p><?= str_replace("\'", "'", $auteur)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter l'auteur
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_auteur" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Auteur de <strong>l'<?= $action ?></strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="auteur" class="form-control" value="<?= (!empty($auteur )) ? trim($auteur) : '' ?>">
					
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
<!-- auteur -->

<!-- source -->
<div class="col-12 editor_source">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> <Source></Source> Source de <strong>l'<?= $action ?></strong></h5>
			<hr>
			
			<?php if(!empty($source )){ ?>

			<p><?= str_replace("\'", "'", $source)  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la source
					</button>
				</div>
			<?php } ?>

				
	
		</div>
	</div>
</div>

<form id="form_editor_source" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">
						Source de <strong>l'<?= $action ?></strong>
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="text" name="source" class="form-control" value="<?= (!empty($source )) ? trim($source) : '' ?>">
					
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
<!-- source -->

<!-- Date_mj -->
<div class="col-12 editor_date_ref">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Date de mise à jour</h5>
			<hr>
			
			<?php if(!empty($date_mj )){ ?>

			<p><?= $date_mj  ?></p>
	
			<div class="col-md-3 col-sm-12 ">
				<button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
					Modifier
				</button>
			</div>
			<?php }else{?>
				<div class="col-md-3 col-sm-12 ">
					<button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
						Ajouter la date de mise à jour
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
						Renseignez la date de mise à jour
					</h4>
					<!-- Create the editor container -->
					<div class="form-group col-12"   style="width: 500px;">
						<input type="date" name="date_mj" class="form-control" value="<?= $date_mj ?>">
					
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
<!-- Date_mj -->



	<!-- Piece jointe-->
	<div class="card">
		<div class="card-body">
		<h5 class="card-title" id="bloc_file"> Pièces jointes  de <strong>l'<?= $action ?> </strong></h5>
		<hr>
			<!-- image -->
			<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title">Images</h6>
			</div>
			<?php foreach($data_illustration as $key => $value) : ?>
				<?php if($value->getType()=='Image'){ ?>
					<?php if($value->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"> <img src="../panessitV14/<?= $value->getLien() ?>" alt="user" />
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../panessitV14/<?= $value->getLien() ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
													<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=<?= ($value->getOnline()==1) ? 'putOffline' : 'putOnline' ?>" title="<?= ($value->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-globe <?= ($value->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
													<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $value->getId()?>&ssaction=del" title="Supprimer"><i class="fa fa-trash"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			<?php endforeach; ?>
			</div>
			<hr>
	
			<!-- Plaquete pdf-->
			<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title" id="plaquette">Plaquettes</h6>
			</div>
			<?php for($k=0; $k<count($data_illustration); $k++) : ?>
				<?php $document=$data_illustration[$k]; ?>
				<?php if($document->getType()=='Plaquette'){ ?>
					<?php if($document->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"><embed src="../panessitV14/<?= $document->getLien() ?>" type="application/pdf" width="300" height="200" />
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline el-link" href="../panessitV14/<?= $document->getLien() ?>" target="_blank" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
												
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $document->getId()?>&ssaction=<?= ($document->getOnline()==1) ? 'putOffline' : 'putOnline' ?>" title="<?= ($document->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-globe <?= ($document->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $document->getId()?>&ssaction=del" title="Supprimer"><i class="fa fa-trash"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			<?php endfor; ?>
			</div>
			<hr>
		
			<!-- Video-->
			<div class="row el-element-overlay">
			<div class="col-md-12">
				<h6 class="card-title" id="video">Videos</h6>
			</div>
			<?php for($r=0; $r<count($data_illustration); $r++) : ?>
				<?php $video=$data_illustration[$r]; ?>
				<?php if($video->getType()=='Video'){ ?>
					<?php if($video->getOnline() != -1){ ?>
						<div class="col-lg-3 col-md-6">
							<div class="card">
								<div class="el-card-item">
									<div class="el-card-avatar el-overlay-1"><video src="../panessitV14/<?= $video->getLien() ?>" width="250" height="200" controls preload="auto"></video>
										<div class="el-overlay">
											<ul class="list-style-none el-info">
												<li class="el-item"><a class="btn default btn-outline video-popup-vertical-fit el-link" href="../panessitV14/<?= $video->getLien() ?>" title="Visualiser"><i class="mdi mdi-magnify-plus"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $video->getId()?>&ssaction=<?= ($video->getOnline()==1) ? 'putOffline' : 'putOnline' ?>" title="<?= ($video->getOnline()==1) ? 'Dépublier' : 'Publier' ?>"><i class="fa fa-globe <?= ($video->getOnline()==1) ? 'text-success' : 'text-warning' ?>"></i></a></li>
												<li class="el-item"><a class="btn default btn-outline el-link" href="index.php?action=<?= $action ?>&saction=Img&id=<?= $video->getId()?>&ssaction=del" title="Supprimer"><i class="fa fa-trash"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="el-card-content">
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			<?php endfor; ?>
			</div>

				<?php //if(empty($img) or empty($plaquette) or empty($video)){ ?>
			<div class="row el-element-overlay">
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
							<div class="dropdown-divider"></div>
							<?php //if(empty($plaquette)){ ?>
								<a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a>
							<?php //} ?> 
							<div class="dropdown-divider"></div>
							<?php //if(empty($video)){ ?>
								<a id="addVideo" class="dropdown-item" href="#">Video illustrative</a>
							<?php //} ?>
							</div>
						</div><!-- /btn-group -->
					
					</div>
					

					<?php if(isset($resultat) && empty($resultat)){ ?>
						<div class="col-md-6 bg-warning">Ce fichier existe déjà pour cet article !</div>
					<?php } ?>
					<?php //} ?> 
					<div class="col-md-12 col-sm-12" id="DivFormAddPj">
						<form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
							<div class="form-group row">
								<div class="col-md-8">
									<div id="importImg" class="custom-file">
										<input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
										<label class="custom-file-label" for="validatedCustomFile">Importer une image *.png de taille px ... </label>
										
									</div>
									<div id="importPlaqt" class="custom-file">
										<input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette">
										<label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf ... </label>
										
									</div>
									<div id="importVideo" >
										<div class="form-group row">
												<div class="col-sm-12">
												<input type="file" class="custom-file-input" id="validatedCustomFile" name="video">
										<label class="custom-file-label" for="validatedCustomFile">Importer une video *.mp4 </label>
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