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
                                            preguntas</h1>
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
                                <a href="" class="text-decoration-none">
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
                    <div class="col-md-9 order-md-2 bg-second" id='showQuestion'>
                        <h5 class="mb-3" id='ShowtitleQuestion'></h5>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <span for="showQuestionDescribe">Descripción pregunta</span>
                                    <span type="text" class="form-control" id="showQuestionDescribe"></span>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <span for="showQuestionType">Tipo Pregunta</span>
                                    <select type="text" class="form-control" id="showQuestionType">

                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <span for="showQuestionDeppend">Depende de:</span>
                                    <select type="text" class="form-control" id="showQuestionDeppend">

                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <span for="showQuestionNotes">Notas pregunta</span>
                                    <textarea type="text" class="form-control" id="showQuestionNotes"></textarea>
                                </div>
                            </div>

                            <table class="table table-bordered">
                                <caption>Lista de sustancias</caption>
                                <thead class="text-white">
                                    <th class="col-3">Sustancia</th>
                                    <th class="col">No</th>
                                    <th class="col">Sí</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>a.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>b.Bebidas </th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>c.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>d.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>e.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>f.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>g.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>h.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>i.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>j.Tabaco</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2" class="table-active">Larry the Bird</td>
                                        {{-- <td>@twitter</td> --}}
                                    </tr>
                                </tbody>
                            </table>

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
                            {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Save this information for next
                                    time</label>
                            </div>
                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio"
                                        class="custom-control-input" checked="" required="">
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio"
                                        class="custom-control-input" required="">
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio"
                                        class="custom-control-input" required="">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder=""
                                        required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4"> --}}
                            <x-layouts.formSave module="forms" />

                            {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                            <button class="btn btn-secondary btn-lg btn-block" type="submit">Cancelar</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/forms.js') }}"></script>
</x-header>
