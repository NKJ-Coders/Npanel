$(document).ready(function(){
      $('#form_editor_type').hide();
        $('#form_editor').hide();
        $('#form_editor_resume').hide();
        $('#form_editor_contenu').hide();
        $('#form_editor_site').hide();
        $('#form_editor_auteur').hide();
        $('#form_editor_source').hide();
        $('#form_editor_date_ref').hide();
        $('#form_editor_chiffre').hide();
        $('#DivFormAddPj').hide();
        $('#importImg').hide();
        $('#importPlaqt').hide();
        $('#importVideo').hide();
        $('.inputImg').hide();

        $('.editor').click(function(){
            $('#form_editor').show();
            $('.editor').hide();
        
        });

        $('.editor_type').click(function(){
         $('#form_editor_type').show();
         $('.editor_type').hide();
     
         });

        $('.editor_site').click(function(){
               $('#form_editor_site').show();
               $('.editor_site').hide();
         
         });
      $('.editor_date_ref').click(function(){
         $('#form_editor_date_ref').show();
         $('.editor_date_ref').hide();
   
      });
      $('.editor_chiffre').click(function(){
         $('#form_editor_chiffre').show();
         $('.editor_chiffre').hide();
   
      });

        $('.editor_resume').click(function(){
            $('.editor_resume').hide();
            $('#form_editor_resume').show();
        });

        $('.editor_contenu').click(function(){
            $('.editor_contenu').hide();
            $('#form_editor_contenu').show();
         });

         $('.editor_auteur').click(function(){
            $('.editor_auteur').hide();
            $('#form_editor_auteur').show();
         });

         $('.editor_source').click(function(){
            $('.editor_source').hide();
            $('#form_editor_source').show();
         });



         $('.close_editor').click(function(){
            $('#form_editor_type').hide();
            $('.editor_type').show();
            $('#form_editor').hide();
            $('.editor').show();
            $('#form_editor_site').hide();
            $('.editor_site').show();
            $('#form_editor_contenu').hide();
            $('.editor_contenu').show();
            $('#form_editor_auteur').hide();
            $('.editor_auteur').show();
            $('#form_editor_source').hide();
            $('.editor_source').show();
            $('#form_editor_date_ref').hide();
            $('.editor_date_ref').show();
            $('#form_editor_chiffre').hide();
            $('.editor_chiffre').show();
            $('.editor_resume').show();
            $('#form_editor_resume').hide();
        });

        $('#addImg').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importImg').show();
    
        });

        $('#addPlaquette').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importPlaqt').show();
        
        });


        $('#addVideo').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importVideo').show();
          
        });

        $('.close_DivFormAddPj').click(function(){
           $('#DivFormAddPj').hide();
           $('#AddPj').show();
            $('#importImg').hide();
            $('#importPlaqt').hide();
            $('#importVideo').hide();
          
        });



        
         
         
});