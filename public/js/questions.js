document.addEventListener('change', (e) => {
    const clickedElement = e.target;

    if (clickedElement.matches('select')) {

        logic(clickedElement.id);

    }

});

function logic(input) {
    alertColors = ['secondary', 'success'];
    input = document.getElementsByName(input);
    updateVal = input[0].value == 0 ? 1 : 0;
    input[0].classList.toggle('bg-' + alertColors[input[0].value]);
    input[0].classList.toggle('bg-' + alertColors[updateVal]);
}