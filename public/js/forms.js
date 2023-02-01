
function includeFile(file = 'js/tableModifies.js') {
    var script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;
    document.body.appendChild(script);
}

document.addEventListener('DOMContentLoaded', (e) => {
    let forms = document.getElementsByTagName('table');
    if (forms.length > 0) {
        includeFile();
        return false;
    }
});


document.addEventListener('click', (e) => {

    const clickedElement = e.target;
    if (clickedElement.matches('button')) {
        switch (clickedElement.id) {
            case 'questionsList':

                return getMasterQuestionss();
                break;

            case 'addQuestions':

                selected = document.getElementById('question_list').querySelectorAll('[type=checkbox]:checked');
                checkedList = [].slice.call(selected).map((e) => e.getAttribute('id'));
                return addNewQuestions(checkedList);

            case 'newResponse':

                Swal.fire({
                    title: 'Agregar respuesta',
                    text: '¿Está seguro de agregar una nueva respuesta a la pregunta?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#0511F2',
                    cancelButtonColor: '#d33'
                }).then((result) => {
                    if (result.isConfirmed) {

                        var modalList = document.getElementById('questionList');
                        modalList = bootstrap.Modal.getInstance(modalList);
                        modalList.show();
                        console.log(modalList);
                        getMasterAns();
                    }
                })

            default:
                break;
        }
    }

    if (clickedElement.tagName.toLowerCase() === 'a' || clickedElement.parentNode.tagName.toLowerCase() === 'a') {
        let question = clickedElement.parentNode.tagName.toLowerCase() === 'a' ? clickedElement.parentNode : clickedElement;

        if (question.matches('.go') && question.id != 'none') {
            question = question.getAttribute('name');
            showQuestionContainer = document.getElementById('showQuestion');
            showQuestionContainer.style.display = showQuestionContainer.style.display == 'none' ? 'show' : 'none';
            const modalTittle = document.getElementById('tittleModal');
            modalTittle.innerHTML = 'Respuesta';

            showQuestion(question);
        }
    }

});

document.getElementById('showQuestionType').addEventListener('change', (e) => {
    switch (e.target.value) {
        case '1':

            firstChild = document.getElementById('showQuestionAnswers').getElementsByTagName('td')[0].getAttribute('id')

            if (firstChild == null) {
                alert('Aún no ha ingresado opciones de respuesta')
                e.target.value = 0;
                return false;
            }



            break;

        default:
            console.log('Abierta')
            break;
    }

    document.getElementById('divShowQuestionsCategories').style.display = (e.target.value == 0) ? 'none' : 'table';
});

document.getElementById('showQuestionDeppend').addEventListener('click', (e) => {

    if (localStorage.check != 1 || typeof (localStorage.check) === 'undefined') {

        localStorage.check = localStorage.check != 1 ? 1 : 0;
    }

});

async function getMasterQuestionss() {
    debugger;

    const API_URL = 'Formulario_C';
    const HTMLResponse = document.querySelector('#question_list');
    const modalTittle = document.getElementById('tittleModal');
    modalTittle.innerHTML = 'Pregunta';
    var li = document.getElementById('formResumeQuestions').querySelectorAll('li');
    var formQuestions = [].slice.call(li).map((e) => e.getAttribute('id'));

    var data = { "data": formQuestions };

    async function postData(url = '', data = {}) {
        const response = await fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json; charset=UTF-8',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')['content']
            }
        });

        console.log(response);
        return response.json();
    }

    postData(API_URL, data)
        .then(data => {
            console.log(data);
            if (data.length == 0) {
                var close = document.getElementById('questionList');
                close = bootstrap.Modal.getInstance(close);
                close._isTransitioning = false;
                close.hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Ups',
                    text: 'Parece que todas las preguntas ya ingresadas al formato actual ',
                    timer: 1600
                })
                return false;
            }

            HTMLResponse.innerHTML = '';
            let masterQuestions = JSON.stringify(data);
            localStorage.masterQuestions = masterQuestions;
            const div = document.createElement('div');

            data.forEach(question => {

                let elem = document.createElement('div');
                elem.className = 'input-group mb-3';

                let labelDiv = document.createElement('div');
                labelDiv.className = 'form-control';

                let questionLabel = document.createElement('label');
                questionLabel.setAttribute('for', `${question.id}`);
                questionLabel.appendChild(document.createTextNode(`${(question.description).toLowerCase()}`));
                labelDiv.appendChild(questionLabel);

                let spanInput = document.createElement('span');
                spanInput.className = 'questionSelect input-group-text';

                let checkInput = document.createElement('input');
                checkInput.className = 'form-check-input';
                checkInput.setAttribute('type', 'checkbox');
                checkInput.setAttribute('id', `${question.id}`);
                spanInput.appendChild(checkInput);
                elem.appendChild(labelDiv);
                elem.appendChild(spanInput);
                div.appendChild(elem);
            });

            HTMLResponse.appendChild(div);
        });
    return false;
}

async function getMasterAns() {
    debugger;
    const API_URL = 'Formular_C';
    const HTMLResponse = document.querySelector('#showQuestionAnswers');
    var tablerow = document.getElementById('showQuestionAnswers').querySelectorAll('tr');
    const Firstrow = tablerow[1];

    if (!Firstrow.hasAttribute('id')) {
        var formAnswers = ['none'];
    } else {
        var formAnswers = [].slice.call(tablerow).map((e) => e.getAttribute('id'));
    }

    var data = { "data": formAnswers };

    async function PostAnswer(url = '', data = {}) {
        const response = await fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json; charset=UTF-8',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')['content']
            }
        });
        console.log(response);
        return response.json();
    }

    PostAnswer(API_URL, data)
        .then(data => {
            // console.log(data);
            if (data.length == 0) {
                var close = document.getElementById('questionList');
                close = bootstrap.Modal.getInstance(close);
                close._isTransitioning = false;
                close.hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Ups',
                    text: 'Parece que todas las preguntas ya ingresadas al formato actual ',
                    timer: 1600
                })
                return false;
            }

            HTMLResponse.innerHTML = '';
            let masterAnswers = JSON.stringify(data);
            localStorage.masterAnswers = masterAnswers;

            const div = document.createElement('div');

            data.forEach(question => {

                let elem = document.createElement('div');
                elem.className = 'input-group mb-3';

                let labelDiv = document.createElement('div');
                labelDiv.className = 'form-control';

                let questionLabel = document.createElement('label');
                questionLabel.setAttribute('for', `${question.id}`);
                questionLabel.appendChild(document.createTextNode(`${(question.description).toLowerCase()}`));
                labelDiv.appendChild(questionLabel);

                let spanInput = document.createElement('span');
                spanInput.className = 'questionSelect input-group-text';

                let checkInput = document.createElement('input');
                checkInput.className = 'form-check-input';
                checkInput.setAttribute('type', 'checkbox');
                checkInput.setAttribute('id', `${question.id}`);
                spanInput.appendChild(checkInput);
                elem.appendChild(labelDiv);
                elem.appendChild(spanInput);
                div.appendChild(elem);
            });

            HTMLResponse.appendChild(div);
        });
    return false;
}

function addNewQuestions(checkedList = '') {

    if (checkedList == '') {
        alert('No ha seleccionado ninguna pregunta');
        return false;
    }

    let masterQuestions = localStorage.masterQuestions;
    masterQuestions = JSON.parse(masterQuestions);
    var tmp = document.createElement('div');
    var questions = [];

    masterQuestions.forEach(question => {

        if (checkedList.includes(question.id)) {

            questions.push(question);
            listRow = document.createElement('li');
            listRow.className = 'list-group-item';
            listRow.id = question.id;

            aLink = document.createElement('a');
            aLink.className = 'go text-decoration-none';
            aLink.name = question.id;


            questionTitle = document.createElement('h6');
            questionTitle.className = 'my-0';
            questionResume = document.createElement('small');
            questionResume.className = 'text-muted';

            questionTitle.innerHTML = `${question.name}`;
            questionResume.innerHTML = `${question.description}`;

            aLink.appendChild(questionTitle);
            aLink.appendChild(questionResume);
            listRow.appendChild(aLink);
            tmp.appendChild(listRow);

        }
    });

    let currentQuestion = localStorage.currentQuestion;
    currentQuestion = typeof currentQuestion === 'undefined' || currentQuestion === 'null' ? [] : JSON.parse(currentQuestion);
    questions.map((e) => currentQuestion.push(e));
    currentQuestion = JSON.stringify(currentQuestion);
    localStorage.currentQuestion = currentQuestion;

    let HTMLResponse = document.getElementById('formResumeQuestions');
    let firtsRow = HTMLResponse.querySelectorAll('li')[0];

    if (firtsRow.id == 'none') {
        HTMLResponse.innerHTML = '';
    }

    tmp = tmp.innerHTML;
    HTMLResponse.innerHTML += tmp;

    var modalClose = document.getElementById('questionList');
    modalClose = bootstrap.Modal.getInstance(modalClose);
    modalClose.hide();
    localStorage.masterQuestions;
    let masterList = document.querySelector('#question_list');
    masterList.innerHTML = '';
}

function showQuestion(question = '') {


    let currentQuestion = localStorage.currentQuestion;
    currentQuestion = JSON.parse(currentQuestion);

    question = currentQuestion.find((e) => e.id == question);

    let showQuestion = document.getElementById('showQuestion');

    if (showQuestion.getAttribute('name') != null && showQuestion.getAttribute('name') != question.id) {
        updateBeforeChange(showQuestion.getAttribute('name'));
    }

    showQuestion.setAttribute('name', question.id);

    if (showQuestion.style.display == 'none') {
        showQuestion.style.display = 'flow-root'
    }

    let tittleQuestion = document.getElementById('ShowtitleQuestion');
    tittleQuestion.innerHTML = question.name;

    let describeQestion = document.getElementById('showQuestionDescribe');
    describeQestion.innerHTML = question.description;

    let notesQestion = document.getElementById('showQuestionNotes');
    notesQestion.value = typeof question.notes === 'undefined' ? '' : question.notes;

    let QuestionDeppend = document.getElementById('showQuestionDeppend');

    currentQuestion = localStorage.currentQuestion;
    currentQuestion = JSON.parse(currentQuestion);

    currentQuestion.map((e) => {
        elem = document.createElement('option');
        elem.id = e.id
    });
}

function updateBeforeChange(id) {

    describeInp = document.getElementById('showQuestionDescribe');
    typeInp = document.getElementById('showQuestionType');
    deppendInp = document.getElementById('showQuestionDeppend');
    notesInp = document.getElementById('showQuestionNotes');

    let localCurrentQuestion = localStorage.currentQuestion;
    localCurrentQuestion = JSON.parse(localCurrentQuestion);

    localCurrentQuestion.map((e) => {
        if (e.id == id) {
            e.description = describeInp.innerHTML;
            e.notes = notesInp.value;
        }
    });

    localStorage.currentQuestion = JSON.stringify(localCurrentQuestion);
    describeInp.value = '';
    notesInp.value = '';
    return;
}