
<div class="card">

    <div class="card-body">
    
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr style="">
                        <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                        <th style="text-align:center;font-weight:1000">Date</th>
                        <th style="text-align:center;font-weight:1000">Clients</th>
                        <th style="text-align:center;font-weight:1000">Statut</th>
                        <th style="text-align:center;font-weight:1000">Montant (Xaf)</th>
                        <th style="width:10%;text-align:center;font-weight:1000">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value){ ?>
                        <?php if($value->getOnline() != -1){ ?>
                        <?php
                            $id_client=$value->getId_client();
                            $nom_client=$this->getColsByCol("custumer","nom","id",$id_client);

                        ?>
                            <tr>
                                <td> <?= $key+1 ?></td>
                                <td><?= $value->getDate();?></td>
                                <td><?= $nom_client ;?> <?=($value->getStatut()==0)?"<span class='badge badge-pill badge-warning'>Nouveau</span>":""  ?></td>
                                <td>
                                    <?php
                                       $closing=$value->getClosing();
                                       if($closing==-1){
                                         echo "En attente";
                                       }elseif ($closing==1) {
                                           echo"concluyant";
                                       }else{
                                        echo"Non concluyant";
                                       }

                                    ?>
                                </td>
                              
                                <td  style="text-align:center;">N/A</td>
                                <td style="text-align:center;">
                                    <?php require("core/include/button.php"); ?>
                                </td> 
                            </tr>
                           
                        <?php }//fin if ?>
                    <?php }//fin foreach ?>
                    
                   
                </tbody> 
              
            </table>
        </div>

    </div>
</div>