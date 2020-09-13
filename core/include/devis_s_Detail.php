 <?php if(!empty($data)) { ?>
    <?php
          //infos sur le client
            $param[0]['col']='id';
            $param[0]['val']=$data[0]->getId_client();
            $data_client=$this->getAllByParam("Custumer",$param);
           //var_dump($data_client);

        //Nom de laprestation
        $titre_prestation=$this->getColsByCol('Prestation','titre','id',$data[0]->getId_prestation());
        $date_demarrage=$data[0]->getDate_demarrage();
        $description=$data[0]->getDescription();
        $adresse_site=$data[0]->getAdresse_site();
        //var_dump($data_product);
    ?>
     <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3>
                                <b>DEMANDE DE DEVIS </b> <span class="pull-right">#<?= $this->formater("",$id,5) ?></span>
                            <?php
                                       $closing=$data[0]->getClosing();
                                       if($closing==-1){
                                         echo "<span class='badge badge-warning'>En attente</span>";
                                       }elseif ($closing==1) {
                                           echo"<span class='badge badge-success' >concluyant</span>";
                                       }else{
                                        echo"<span class='badge badge-danger'>Non concluyant</span>";
                                       }

                                    ?>
                                </h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger"><?=$this->getColsByCol("custumer","nom","id",$data[0]->getId_Client()) ?></b></h3>
                                                 <p class="text-muted m-l-5">
                                                Pays: <?= $data_client[0]->getPays();?>
                                                <br/> Ville: <?= $data_client[0]->getVille();?>
                                                <br/> Adresse: <?= $data_client[0]->getAdresse();?>
                                                <br/> Tel: <?= $data_client[0]->getTel();?>
                                                <br> Email: <?= $data_client[0]->getEmail();?>
                                            </p>
                                             <p class="m-t-30"><b>Date demande devis :</b> <i class="fa fa-calendar"></i> <?= $data[0]->getDate() ?></p>
                                           
                                           
                                        </address> 
                                    </div>
                                     
                                </div>
                                <div class="col-md-12">
                                         <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">Démarrage: <?= $date_demarrage ?></td>
                                                    <td class="text-center">¨Prestation: <?= str_replace("\'", "'", $titre_prestation) ?></td>
                                                    <td class="text-center">Site: <?= str_replace("\'", "'", $adresse_site) ?></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:justify;">
                                                    <p>Description du projet</p><br>
                                                    <p>
                                                        <?= str_replace("\'", "'", $description) ?>
                                                    </p>
                                                            
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                </div>
                                <div class="col-md-12">
                                  
                                    <div class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Traitement</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="mailto:<?= $data_client[0]->getEmail() ?>&subject=Votre commande">
                                                   <i style="color:blue" class="fas fa-envelope"></i>  Envoyer un  mail
                                                </a>
                                                <?php if($data[0]->getClosing()==0 or $data[0]->getClosing()==-1){ ?>
                                                <a class="dropdown-item" href="index.php?action=Commande&saction=Detail&ssaction=1&id=<?=$id?>">
                                                    <i style="color:green" class=" fas fa-check-circle"></i>
                                                    Affaire concluyante

                                                </a>
                                                <?php } ?>
                                                <?php if($data[0]->getClosing()==-1 or $data[0]->getClosing()==1  ){ ?>
                                                <a class="dropdown-item" href="index.php?action=Commande&saction=Detail&ssaction=0&id=<?=$id?>">
                                                     <i style="color:red" class=" fas fa-window-close"></i>
                                                     Affaire non concluyante
                                                </a>
                                                <?php } ?>
                                                
                                               
                                            </div>
                                        </div><!-- /btn-group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php } ?>