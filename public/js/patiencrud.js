

// var borncountry = document.getElementById('borncountry');
// var bornstate = document.getElementById('bornstate');
// var borncity = document.getElementById('borncity');

// const { isSet } = require("lodash");

document.addEventListener('click', (e) => {
  const clickedElement = e.target;

  if (!clickedElement.matches('select') && !clickedElement.matches('.patientAlert') && !clickedElement.parentNode.matches('.patientAlert')) {
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
    console.log('API')
  }

});


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
  document.getElementById(button).classList.toggle('btn-'+alertColors[z_xOne[0].value]);
  document.getElementById(button).classList.toggle('btn-'+alertColors[updateVal]);

  // z_xOne[0].value = updateVal;
  // document.getElementById(button).classList.toggle(alertColors[updateVal]);

  // updateval = value == 1 ? 0 : 1;
  // $(checkbox).val(updateval);
  // button.className = button.className.replace(alertColors[value], alertColors[updateval]);
}