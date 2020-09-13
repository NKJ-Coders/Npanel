<!-- Modal -->
<div class="modal fade" id="description" tabindex="-1" role="dialog" aria-labelledby="description" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#18A4E5; color:#FFF">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <?= $title_modal ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body" style="padding:25px 25px 25px 25px; background-color:#F0F3F4">
                      <?php if(isset($action)) {

                      $form_to_include=""; 
                      

                       $form_to_include="core/include/".strtolower($action);

                    
                        if(!isset($saction)){
                            
                          
                           $form_to_include.="_add.form.php";
                    
                          }elseif(isset($saction) && $saction=="add"){
                            
                           $form_to_include.="_add.form.php";

                          }elseif(isset($saction) && $saction=="Detail"  && isset($_GET['id'])){
                            #Afficher le détail de la ligne  id
                             $form_to_include.="_update_detail.form.php";

                         
                        }elseif(isset($saction) && $saction=="list"  && isset($_GET['id'])){
                            #Afficher le détail de la ligne  id
                              $form_to_include.="_add_".$saction.".form.php";

                         
                        }//Fin saction

                            
             

                    // inclure le fichier 
                    if(file_exists($form_to_include)){

                        include($form_to_include);

                    }else{
                       echo" <div style='background-color:#fff; text-align:center'>";
                        echo"<h2><span style='color:red'><i class='fas fa-frown'></i> </span>Cette page n'existe pas! </h2>";
                        echo"</div>";
                    }
                    
                } ?>




        </div>
     
    </div>
  </div>
</div>
