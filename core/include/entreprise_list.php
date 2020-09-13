<?php if(empty($this->AllData($action))){ ?>
<p>
    <button type="button" data-toggle="modal" data-target="#description" class="btn btn-outline-primary">
     <i class="fa fa-plus">         
     </i>
   </button>
       
</p>
<?php } ?>

<div class="card">

    <div class="card-body">
    
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr style="">
                        <th style="width:5%;text-align:center;font-weight:1000">N°</th>
                        <th style="width:25%;text-align:center;font-weight:1000">Nom</th>
						<th style="width:25%;text-align:center;font-weight:1000">Adresse</th>
						<th style="width:25%;text-align:center;font-weight:1000">Ville</th>
                        <th style="width:20%;text-align:center;font-weight:1000">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value){ ?>
					<?php if($value->getOnline() != -1){ ?>
                        <tr>
                            <td> <?= $key+1 ?></td>
                            <td><?= $value->getNom();?></td>
							<td><?= $value->getAdresse();?></td>
							<td><?= $value->getVille();?></td>
                            
                            <td style="text-align:center;"><?php require("core/include/button.php"); ?></td> 
                    </tr>
                       
                    <?php }//fin if ?>
					<?php }//fin foreach ?>
                    
                   
                </tbody> 
              
            </table>
        </div>

    </div>
</div>