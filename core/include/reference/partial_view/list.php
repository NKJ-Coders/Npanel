<?php if($type=='Client' || $type=='Partenaire' || $type=='Chiffre') { ?>
    <?php $root_button = $root.'button.php' ?>
    <p>
        <button type="button" data-toggle="modal" data-target="#description" class="btn btn-outline-primary">
            <i class="fa fa-plus">         
            </i>
        </button>
        
    </p>

    <div class="card"> 

        <div class="card-body">

            <div class="table-responsive">
            <?php if($type=='Client' || $type=='Partenaire') { ?>
            <?php
                $data=[];
                $param=[];
                $param[0]['col'] = 'type';
                $param[0]['val'] = $type;
                $data = $this->getAllByParam($action, $param);
            ?>
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr style="">
                            <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Nom</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Date référence</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                            <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value){ ?> 
                        
                        <?php if($value->getOnline() != -1){ ?>
                            <tr>
                                <td> <?= $key+1 ?></td>
                                <td><?= str_replace("\'", "'",  $value->getNom() ) ?></td>
                                <td><?= $value->getDate_reference() ?></td>
                                <td  style="text-align:center;">
                                    <?=  getStatut($value->getOnline());?>
                                </td>
                                
                                <td style="text-align:center;"><?php require($root_button); ?></td> 
                        </tr>
                            
                        <?php }//fin if ?>
                        <?php }//fin foreach ?>
                        
                        
                    </tbody> 
                    
                </table>
            <?php } else{ ?>
                <?php
                    $data=[];
                    $param=[];
                    $param[0]['col'] = 'type';
                    $param[0]['val'] = $type;
                    $data = $this->getAllByParam($action, $param);
                ?>
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr style="">
                            <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Nom</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Chiffre</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Date référence</th>
                            <th style="width:25%;text-align:center;font-weight:1000">Statut</th>
                            <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value){ ?> 
                        <?php
                            // $id_agence=$value->getId_agence();
                            // $nom_agence=$this->getColsByCol("Agence","nom","id",$id_agence);
                        ?>
                        <?php if($value->getOnline() != -1){ ?>
                            <tr>
                                <td> <?= $key+1 ?></td>
                                <td><?= str_replace("\'", "'",  $value->getNom() ) ?></td>
                                <td><?= $value->getChiffre() ?></td>
                                <td><?= $value->getDate_reference() ?></td>
                                <td  style="text-align:center;">
                                    <?=  getStatut($value->getOnline());?>
                                </td>
                                
                                <td style="text-align:center;"><?php require($root_button); ?></td> 
                        </tr>
                            
                        <?php }//fin if ?>
                        <?php }//fin foreach ?>
                        
                        
                    </tbody> 
                    
                </table>
            <?php } ?>
            </div>

        </div>
    </div>
<?php } else { ?>
    <div class="error-box" style="left:0px">
        <div class="error-body text-center">
            <h1 class="error-title text-danger">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE INTROUVABLE !</h3>
            
            <a href="index.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">retourner à l'accueil</a> </div>
    </div>
<?php } ?>