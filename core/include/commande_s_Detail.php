 <?php if(!empty($data)) { ?>
    <?php
          //infos sur le client
            $param[0]['col']='id';
            $param[0]['val']=$data[0]->getId_Client();
             $data_client=$this->getAllByParam("Custumer",$param);
           // var_dump($data_client);

        //infos sur les produits à commander
               //infos sur les produits à commander (panier)
            $param[0]['col']='id_commande';
            $param[0]['val']=$id;
            $data_product=$this->getAllByParam("Panier",$param);
           // var_dump($data_product);
    ?>
 <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3>
                                <b>COMMANDE</b> <span class="pull-right">#<?= $this->formater("",$id,5) ?></span>
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
                                             <p class="m-t-30"><b>Date demande :</b> <i class="fa fa-calendar"></i> <?= $data[0]->getDate() ?></p>
                                            <p><b>Date de closing :</b> <i class="fa fa-calendar"></i> <?= (!empty($data[0]->getDate_closing()))?$data[0]->getDate_closing():"En cours" ?></p>
                                           
                                        </address> 
                                    </div>
                                     
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-right">Quantité</th>
                                                    <th class="text-right">Prix unitaire (xaf)</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $somme=0;  ?>
                                            <?php foreach ($data_product as $key => $item) { ?>           
                                                <tr>
                                                    <td class="text-center"><?= $key+1?></td>
                                                    <td><?=$this->getColsByCol("Produit","nom","id",$item->getId_produit() ) ?></td>
                                                    <td class="text-right">
                                                        <?= number_format($item->getQt() , 0, ',', ' ') ?> 
                                                    </td>
                                                    <td class="text-right">

                                                        <?=(!empty($item->getPu()))? number_format($item->getPu(), 0, ',', ' '):"N/A" ?> 
                                                    </td>
                                                    <td class="text-right">
                                                        <?php 
                                                          if(!empty($item->getPu())){
                                                             $montant=$item->getQt()*$item->getPu() ;
                                                            $somme+=$montant;
                                                           echo number_format($montant, 0, ',', ' ');
                                                       }else{
                                                        echo"N/A";
                                                       }
                                                           
                                                         ?>
                                                            
                                                    </td>
                                                </tr>

                                            <?php }  ?>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Total ht: xaf <?= number_format($somme, 0, ',', ' ')?></p>
                                        <p>Tva (19,25%) : xaf <?=number_format($somme*0.1925, 0, ',', ' ')?> </p>
                                        <hr>
                                        <h3><b>Total ttc :</b> : xaf <?=number_format($somme*1.1925, 0, ',', ' ')?> </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
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