document.addEventListener('DOMContentLoaded', (e) => {

    let forms = document.getElementsByTagName('table');
    if (forms.length > 0) {

        includeFile();
        return false;
    }
});

document.addEventListener('click', (e) => {

    const clickedElement = e.target;
    if (clickedElement.id == 'addQuestions') {

        inputs = document.querySelectorAll('input[type="checkbox"]:checked')
        if (inputs.length > 0) {

            console.log(inputs);
        }
        return false;
    }
    if (clickedElement.type == 'checkbox') {

        // aqui validaré las preguntas previamente cargadas con el fin de no repetirlas
        console.log(clickedElement.checked)
        return false;
    }
});


function includeFile(file = 'js/tableModifies.js') {

    var script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;
    document.body.appendChild(script);
}