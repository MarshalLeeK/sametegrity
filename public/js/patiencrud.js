document.addEventListener('click', (e) => {

  const clickedElement = e.target;
  if (!clickedElement.matches(['select', '.patientAlert']) && !clickedElement.parentNode.matches('.patientAlert')) {
    return false;
  }

  elementId = clickedElement.id == '' ? clickedElement.parentNode.id : clickedElement.id;
  if (elementId == '') {
    return false;
  }

  elementType = clickedElement.matches('select') ? 'Listado' : 'Boton';

  if (elementType == 'Boton') {
    logic(elementId)
  } else {
    if (elementId.split('-')[1] != 'country') {

      dependInput = elementId.split('-')[0] + '-' + (elementId.split('-')[1] == 'state' ? 'country' : 'state');
      dependValue = document.getElementById(dependInput);

      console.log(dependValue.value);
      // dependValue = 
    }
  }

});

//ACTUALIZAR FOTO
$('#borndate').on('change', function () {
  const selectdate = $('#borndate').val();
  const today = moment(new Date());

  var borndate = moment(selectdate);
  var diff = today.diff(borndate, 'years')
  $('#age').val(diff);
})


//FOTO
$("#imageUpload").change(function (data) {
  var imageFile = data.target.files[0];
  var reader = new FileReader();
  reader.readAsDataURL(imageFile);

  reader.onload = function (evt) {
    $('#imagePreview').attr('src', evt.target.result);
    $('#imagePreview').hide();
    $('#imagePreview').fadeIn(650);
  }

});

//Buttons Check Inputs

function logic(button) {
  alertColors = ['secondary', 'primary'];
  z_xOne = document.getElementsByName(button);
  updateVal = z_xOne[0].value == 0 ? 1 : 0;
  document.getElementById(button).classList.toggle('btn-' + alertColors[z_xOne[0].value]);
  document.getElementById(button).classList.toggle('btn-' + alertColors[updateVal]);
}