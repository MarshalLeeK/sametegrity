document.addEventListener('DOMContentLoaded', (e) => {

    let forms = document.getElementsByTagName('table');
    if (forms.length > 0) {

        includeFile();
        return false;
    }
});

document.addEventListener('click', (e) => {

    const clickedElement = e.target;
    console.log(clickedElement.id);
    console.log(clickedElement.name);

    if (clickedElement.id == 'addQuestions' || clickedElement.name == 'addQuestions') {
        console.log('Agregar pregunta');
        // return generateModal();
    }
    if (clickedElement.id == '') {

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


function generateModal() {
    template = `
    <div class="modal fade" id="questionList" tabindex="-1"
                            aria-labelledby="datosGeneralesPregunta" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title text-center fs-5" id="datosGeneralesPregunta">Agregar
                                            preguntas</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach ($questionList as $question)
                                            <div class="input-group mb-3">
                                                <div class="form-control">
                                                    <label
                                                        for="floatingInputGroup1">{{ mb_strtolower($question->description) }}</label>
                                                </div>
                                                <span class="questionSelect input-group-text"><input
                                                        class="form-check-input" type="checkbox"
                                                        id="{{ $question->id }}"></span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success bg-opcity-75"
                                            id="addQuestions">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    `;
    console.log(template);

}