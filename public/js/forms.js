document.addEventListener('DOMContentLoaded', (e) => {


    let forms = document.getElementsByTagName('table');
    if (forms.length > 0) {
        includeFile();
        return false;
    }

    
});


// Acciones botones
document.addEventListener('click', (e) => {
    const clickedElement = e.target;
    if (clickedElement.matches('.logic')) {
        logic(clickedElement);

    }
    if (clickedElement.parentNode.matches('.logic')) {
        logic(clickedElement.parentNode);
    }
});

function logic(button, update = 1) {

    let input = document.getElementsByName(button.id)[0], inputValue = input.value;
    const alertColors = ['secondary', 'success'],
        ClassButton = button.classList;
    let ClassbyInput = 'btn-' + alertColors[inputValue];

    if (update == 1) {
        inputValue = 1 - inputValue,
            ClassbyInput = 'btn-' + alertColors[inputValue];
        input.value = inputValue;
    }

    if (ClassbyInput != ClassButton[3]) {
        ClassButton.replace(ClassButton[3], ClassbyInput);
    }

    if (document.getElementsByName('unique_answer')[0].value == 0 && document.getElementsByName('open')[0].value == 1) {
        let buttonDefaultChanges = document.getElementById('unique_answer');
        document.getElementsByName('unique_answer').value == 1;
        buttonDefaultChanges.classList.replace(buttonDefaultChanges.classList[3], 'btn-' + alertColors[1]);
    }
    return false;
}

function includeFile(file = 'js/tableModifies.js') {

    var script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;
    document.body.appendChild(script);
}