<x-header hd-title="Formatos" hd-description="Datos generales sobre preguntas creadas" :module="$module"
    :view="$view" csrf=1>

    <x-layouts.titleBanner title-Module="FORMATOS" />
    <form class="container p-2 form h-100 bg-light" action="{{ route($module . 'Save') }}" method="POST">
        @csrf
        <div class="row">
            <div class="py-2 text-start">
                <h2>Datos básicos</h2>
                <div class="row-inline p-2 border-bottom">
                    <div class="row">
                        <x-layouts.miscellaneous.inputdiv fieldname="name" showname="Nombre"
                            placeholder="Nombre Formulario" div-Class='col-md-6' />
                        <x-layouts.miscellaneous.inputdiv fieldname="prefix" showname="Prefijo" placeholder="Prefijo"
                            div-Class='col-md-2' />
                        <x-layouts.miscellaneous.inputdiv fieldname="lastCode" showname="Ultimo Código"
                            placeholder="Ultimo código generado" div-Class='col-md-2' enable="1" value="0" />
                        <x-layouts.miscellaneous.inputdiv fieldname="version" showname="Versión" placeholder="Versión"
                            div-Class='col-md-2' />
                        <p></p>
                        <x-layouts.miscellaneous.textareaDiv div-class="col-md-6" fieldname="description"
                            showname="Descripción del formato a aplicar" />

                        <x-layouts.miscellaneous.textareaDiv div-class="col-md-6" fieldname="notes"
                            showname="Comentarios para el entrevistador" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row m-1">
                    <div class="col-md-3 order-md-1 mb-4 bg-primary bg-opacity-10">

                        <div class="hstack gap-3">
                            <h5 class="d-flex-inline justify-content-md-end align-items-center p-1">
                                <small>
                                    <span class="text-center">Preguntas asignadas:</span>
                                    <span
                                        class="badge badge-primary text-muted">{{ ($questionsRow ?? 0) == 0 ? 0 : $questionsRow->count() }}</span>
                                    <button type="button" class="btn btn-sm btn-success ms-auto"
                                        title="Agregar Pregunta" id="questionsList" data-bs-toggle="modal"
                                        data-bs-target="#questionList">
                                        <span class="pe-none">
                                            <i class="bi bi-plus-circle-fill" name="questionsList"></i>
                                        </span>
                                    </button>
                                </small>
                            </h5>
                        </div>

                        <div class="modal fade" id="questionList" tabindex="-1"
                            aria-labelledby="datosGeneralesPregunta" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title text-center fs-5" id="datosGeneralesPregunta">Agregar
                                            <span id='tittleModal'>pregunta</span>
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="question_list">
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


                        <ul class="list-group mb-1 table-cell" id="formResumeQuestions">
                            <li class="list-group-item" id='none'>
                                <a class="text-decoration-none">
                                    <h6 class="my-0">Aún no hay preguntas asociadas</h6>
                                    <small class="text-muted">
                                        oprima el botón <strong>+</strong>
                                        para agregar una pregunta al formato
                                    </small>
                                </a>
                            </li>
                        </ul>
                        <div class="ms-auto">
                            <span>Total máximo esperado</span>
                            <strong>50</strong>
                        </div>
                    </div>
                    <div class="col-md-9 order-md-2 bg-second" id="showQuestion" style="display:none">
                        <h5 class="mb-3" id='ShowtitleQuestion'></h5>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <span for="showQuestionDescribe">Descripción pregunta</span>
                                    <span type="text" class="form-control" id="showQuestionDescribe">&nbsp;</span>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <span for="showQuestionType">Tipo Pregunta</span>
                                    <select type="text" class="form-control" id="showQuestionType">
                                        <option value="" selected>Seleccione tipo pregunta</option>
                                        <option value="0">Abierta</option>
                                        <option value="1">Categoría Sustancias</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <span for="showQuestionDeppend">Depende de:</span>
                                    <select type="text" class="form-control" id="showQuestionDeppend">

                                    </select>
                                </div>

                                {{-- TABLE  ANSWERS --}}

                                <div class="col-md-12 mb-3" id="divShowQuestionAnswers">
                                    <table class="table table-bordered" id="showQuestionAnswers"
                                        style="display:hidden">
                                        <caption>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <strong>Lista de respuestas</strong>
                                                <div class="ms-auto">
                                                    <button class="btn btn-success btn-sm"
                                                        id="newResponse">Agregar</button>
                                                </div>
                                            </div>
                                        </caption>
                                        <thead class="text-white" id="showQuestionAnswersEnc">
                                            <th class="col-4" id='static'>Respuesta</th>
                                            <th class="col-6" id='static'>Comentario</th>
                                            <th class="col-2" id='static'>valor</th>
                                        </thead>
                                        <tbody id="showQuestionAnswersDet">
                                            <tr>
                                                <th colspan="2">Aún no hay respuestas asociadas</th>
                                                <td class="table-active ms-auto text-end" title="Total posible">0
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                {{-- TABLE  QUESTIONS --}}
                                <div class="col-md-12 mb-3" id="divShowQuestionsCategories" style="display:none">
                                    <table class="table table-bordered" id="showquestionCategories">
                                        <caption>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <strong>Lista de sustancias</strong>
                                                <div class="ms-auto">
                                                    <button class="btn btn-success btn-sm"
                                                        disabled="disabled">Agregar</button>
                                                </div>
                                            </div>
                                        </caption>
                                        <thead class="text-white" id="ShowquestionCategoriesEnc">
                                            <th class="col-3" id='static'>Sustancia</th>
                                            <th scope="row">Aún no hay respuestas asociadas</th>
                                        </thead>
                                        <tbody id="ShowquestionCategoriesDet">
                                            <tr>
                                                <th scope="row">Aún no hay preguntas asociadas</th>
                                                <td colspan="2" class="table-active ms-auto"
                                                    title="Total posible">0
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <span for="showQuestionNotes">Notas pregunta</span>
                                    <textarea type="text" class="form-control" id="showQuestionNotes"></textarea>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="username">Sustancias</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        {{-- <span class="input-group-text">@</span> --}}
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        required="">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        {{-- Your username is required. --}}
                                    </div>
                                </div>
                            </div>

                            <x-layouts.formSave module="forms" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/forms.js') }}"></script>
</x-header>
