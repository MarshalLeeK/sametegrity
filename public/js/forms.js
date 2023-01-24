
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

        if (clickedElement.id == 'questionsList') {
            return getMasterQuestionss();
        }

        if (clickedElement.id == 'addQuestions') {
            selected = document.getElementById('question_list').querySelectorAll('[type=checkbox]:checked');
            checkedList = [].slice.call(selected).map((e) => e.getAttribute('id'));
            return addNewQuestions(checkedList);
        }
    }

    if (clickedElement.tagName.toLowerCase() === 'a' || clickedElement.parentNode.tagName.toLowerCase() === 'a') {
        let question = clickedElement.parentNode.tagName.toLowerCase() === 'a' ? clickedElement.parentNode : clickedElement;

        if (question.matches('.go') && question.id != 'none') {
            question = question.getAttribute('name');
            showQuestion(question);
        }
    }
});

document.getElementById('showQuestionType').addEventListener('change', (e) => {
    console.log(e.target.value);
    document.getElementById('ShowquestionCategories').style.display = (e.target.value == 0) ? 'none' : 'table';
});

document.getElementById('showQuestionDeppend').addEventListener('click', (e) => {

    if (localStorage.check != 1 || typeof (localStorage.check) === 'undefined') {
        console.log(localStorage.check);

        localStorage.check = localStorage.check != 1 ? 1 : 0;
    }
    console.log(localStorage.check);

});

async function getMasterQuestionss() {

    const API_URL = 'Formulario_C';
    const HTMLResponse = document.querySelector('#question_list');
    var li = document.getElementById('formResumeQuestions').querySelectorAll('li');
    var formQuestions = [].slice.call(li).map((e) => e.getAttribute('id'));

    var data = { "data": formQuestions };

    async function postData(url = '', data = {}) {
        const response = await fetch(url, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'pplication/json; charset=UTF-8',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')['content']
            }
        });
        return response.json();
    }

    postData(API_URL, data)
        .then(data => {

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
        // console.log(elem);
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