<p>
    <button type="button" data-toggle="modal" data-target="#description" class="btn btn-outline-primary">
     <i class="fa fa-plus">         
     </i>
   </button>
       
</p>

<div class="card">

    <div class="card-body">
    
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr style="">
                        <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                        <th style="text-align:center;font-weight:1000">Catégorie</th>
                        <th style="text-align:center;font-weight:1000">Libellé</th>
                        <th style="text-align:center;font-weight:1000">Marque</th>
                        <th style=" width:10%;text-align:center;font-weight:1000">Stock</th>
                        <th style="text-align:center;font-weight:1000">Condi.</th>
                        <th style=" width:10%; text-align:center;font-weight:1000">Acc.</th>
						<th style="width:10%;text-align:center;font-weight:1000">Statut</th>
                        <th style="width:10%;text-align:center;font-weight:1000">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value){ ?>
                        <?php
                           $id_cat=$value->getId_cat();
                           $categorie=New CategorieManager();
                           $nom_cat=$categorie->getOneColbyOneCol("categorie","nom","id",$id_cat);
                        ?> 
					<?php if($value->getOnline() != -1){ ?>
                        <tr>
                            <td> <?= $key+1 ?></td>
                            <td><?= $nom_cat ?></td>
                            <td><?= str_replace("\'", "'", $value->getNom()) ?></td>
                            <td><?= $value->getMarque() ?></td>
                            <td><?= ($value->getDisponible())?"<span  class='badge badge-pill badge-success'>En stock</span>":"<span  class='badge badge-pill badge-warning'>Epuisé<s/pan>" ?></td>
                            <td><?= (empty($value->getConditionnement()))?"Classique":$value->getConditionnement() ; ?></td>
                            <td><?= ($value->getVitrine())?"<span  class='badge badge-pill badge-primary'>Visible</span>":"<span  class='badge badge-pill badge-warning'>Non visible<s/pan>"   ?></td>
                            <td  style="text-align:center;"><?=  getStatut($value->getOnline());?></td>
							
                            <td style="text-align:center;"><?php require("core/include/button.php"); ?></td> 
                    </tr>
                       
                    <?php }//fin if ?>
                    <?php }//fin foreach ?>
                   
                </tbody> 
              
            </table>
        </div>

    </div>
</div>

