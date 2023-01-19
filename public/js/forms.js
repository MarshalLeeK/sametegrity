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

        console.log(clickedElement.id);
        if (clickedElement.id == 'questionsList') {
            return getMasterQuestionss();
        }

        if (clickedElement.id == 'addQuestions') {

            selected = document.getElementById('question_list').querySelectorAll('[type=checkbox]:checked');
            checkedList = [].slice.call(selected).map((e) => e.getAttribute('id'));
            return addNewQuestions(checkedList);
        }
    }

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
            HTMLResponse.innerHTML = '';
            localStorage.masterQuestions = JSON.stringify(data);
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

    const masterQuestions = JSON.parse(localStorage.masterQuestions);
    var tmpQuestions = new Array();
    var tmp = document.createElement('div');

    masterQuestions.forEach(question => {
        if (checkedList.includes(question.id)) {
            tmpQuestions.push(question);
            listRow = document.createElement('li');
            listRow.className = 'list-group-item';
            listRow.id = question.id;
            tmp.appendChild(listRow);
        }
    });

    let HTMLResponse = document.getElementById('formResumeQuestions');
    let nowKP = HTMLResponse.querySelectorAll('li')[0];
    if (nowKP.id == 'none') {
        HTMLResponse.innerHTML = '';
    }

    tmp = tmp.innerHTML;
    console.log(tmp);
    HTMLResponse.appendChild(tmp);
    var modalClose = document.getElementById('questionList');
    modalClose = bootstrap.Modal.getInstance(modalClose);
    modalClose.hide();
    localStorage.removeItem('masterQuestions');

}