<x-header hd-title="Formatos" hd-description="Datos generales sobre preguntas creadas" :module="$module"
    :view="$view">
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
                            <h4 class="d-flex-inline justify-content-between align-items-center p-1">
                                <span class="text-center">Tabla Preguntas</span>
                                <span class="badge badge-primary text-muted">3</span>
                                <button type="button" class="btn btn-primary ms-auto" title="Agregar Pregunta"
                                    id="addQuestion" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>

                            </h4>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Agregar
                                            preguntas</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach ($questionList as $question)
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><sub>{{ $question->name }}</sub></span>
                                                <div class="form-control">
                                                    <label
                                                        for="floatingInputGroup1">{{ strtolower($question->description) }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success bg-opcity-75">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <ul class="list-group mb-1" id="questionList">

                            @if (($questionsRow ?? 0) == 0)
                                <li class="list-group-item">
                                    <div>
                                        <h6 class="my-0">Aún no hay prreguntas asociadas</h6>
                                        <small class="text-muted">
                                            oprima el botón <strong>+</strong>
                                            para agregar una pregunta al formato
                                        </small>
                                    </div>
                                </li>
                            @else
                                @foreach ($questionsRow as $questionRow)
                                    <li class="list-group-item">
                                        <div>
                                            <h6 class="my-0">Product name</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$12</span>
                                    </li>
                                @endforeach
                                {{-- 
                                <li class="list-group-item">
                                    <div>
                                        <h6 class="my-0">Second product</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$8</span>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$5</span>
                                </li>
                                <li class="list-group-item bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small>EXAMPLECODE</small>
                                    </div>
                                    <span class="text-success">-$5</span>
                                </li> --}}
                            @endif


                        </ul>
                        <div class="ms-auto">
                            <span>Total máximo esperado</span>
                            <strong>50</strong>
                        </div>
                        {{-- <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form> --}}
                    </div>
                    <div class="col-md-9 order-md-2 bg-second">
                        <h4 class="mb-3">Billing address</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        required="">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                    required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2"
                                    placeholder="Apartment or suite">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country</label>
                                    <select class="custom-select d-block w-100" id="country" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <select class="custom-select d-block w-100" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the
                                    same as
                                    my billing address</label>
                            </div>
                            <div class="custom-control custom-checkbox">
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
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
                                checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/forms.js') }}"></script>
</x-header>
