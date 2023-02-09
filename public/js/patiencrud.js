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
    logic(elementId);
  }

  if (elementType == 'Listado') {

    if (clickedElement.matches('.geo')) {
      dependInput = elementId.split('-')[0] + '-' + (elementId.split('-')[1] == 'state' ? 'country' : 'state');
      dependValue = document.getElementById(dependInput);
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
  
  elementId = ''

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
  let checked = z_xOne[0].checked = z_xOne[0].checked == false ? true : false;

  document.getElementById(button).classList.toggle('btn-' + alertColors[+checked == 0 ? 1 : 0]);
  document.getElementById(button).classList.toggle('btn-' + alertColors[+checked]);
}