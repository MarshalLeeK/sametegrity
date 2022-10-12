    
    // Calcular edad
    $('#borndate').on('change', function(){
        const selectdate =  $('#borndate').val();
        const today = moment(new Date());

        var borndate =  moment(selectdate);
        var diff = today.diff( borndate, 'years')
        $('#age').val(diff);
    })

    //FOTO
    $("#imageUpload").change(function(data)
    {
        var imageFile = data.target.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);
    
        reader.onload = function(evt){
          $('#imagePreview').attr('src', evt.target.result);
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
        }
        
      });

      //Buttons Check Inputs

      function logic(button){
          alertColors = ['secondary','primary'];
          checkbox = '[name="'+ button.id +'"]';
          value = $(checkbox).val();
          updateval = value == 1 ? 0 : 1 ;
          $(checkbox).val(updateval);
          button.className = button.className.replace(alertColors[value],alertColors[updateval]);
      }