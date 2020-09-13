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
                                                <th style="text-align:center;font-weight:1000">Rubrique</th>
												
                                                <th style="width:15%;text-align:center;font-weight:1000">Statut</th>
                                                <th style="width:15%;text-align:center;font-weight:1000">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $key => $value){ ?>
												<?php if($value->getOnline() != -1){ ?>
                                                <tr>
                                                    <td> <?= $key+1 ?></td>
                                                    <td><?= $value->getRubrique();?></td>
                                                    <td  style="text-align:center;"><?=  getStatut($value->getOnline());?></td>
                                                   
                                                    <td style="text-align:center;"><?php require("core/include/button.php"); ?></td> 
                                            </tr>
                                            <?php }//fin foreach ?>
                                            <?php }//fin foreach ?>
                                            
                                           
                                        </tbody> 
                                      
                                    </table>
                                </div>

                            </div>
                        </div>