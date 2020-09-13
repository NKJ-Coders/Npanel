<h5>
   Liste des  <?= $type ?>s
       
</h5>

<div class="card">

                            <div class="card-body">
                            
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="">
                                                <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                                                 <th style="width:20%;text-align:center;font-weight:1000">Nom</th>
                                                <th style="width:20%;text-align:center;font-weight:1000">Objet</th>
												<th style="width:20%;text-align:center;font-weight:1000">Type</th>
												<?php if($type == 'Message'){?>
												<th style="width:20%;text-align:center;font-weight:1000">Date</th>
												<?php }elseif($type == 'Commande'){ ?>
												<th style="width:25%;text-align:center;font-weight:1000">Date</th>
												<?php } ?>
												<th style="width:15%;text-align:center;font-weight:1000">Statut</th>
                                                <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $key => $value){ ?>
											<?php if($value->getOnline() != -1){ ?>
                                                <tr>
                                                    <td> <?= $key+1 ?></td>
                                                    <td><?= $value->getNom();?></td>
                                                    <td><?= $value->getObjet();?></td>
													<td><?= $value->getTypeM();?></td>
													<?php if($type== 'Message'){?>
													<td><?= $value->getDateMessage();?></td>
													<?php }elseif($type == 'Commande'){ ?>
													<td><?= $value->getDateCommande();?></td>
													<?php } ?>
													
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