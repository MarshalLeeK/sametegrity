<x-header hd-title="Assist-3.0" hd-meta-description="Assist" module="Assist" view="_">

    <div class="container" id="form">
        <section class="row">
            <div class="col-md-12">
                <h1 class="text-center">OMS-ASISST V3.0</h1>
                <p class="text-center"><strong>SAMEIN S.A.S.</strong></p>
            </div>
        </section>
        <hr><br />

        <section class="row">
            <section class="col-md-12">
                <section class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="interviewDate">Fecha Entrevista: *</label>
                            <input type="date" class="form-control form-control-sm" id="interviewDate" disabled>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="patientName">Nombre Paciente: *</label>
                            <input type="text" class="form-control form-control-sm" id="patientName" maxlength="128"
                                placeholder="Nombre Completo" required>
                        </div>
                    </div>
                </section>
                <section class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patientName">Clinica: *</label>
                            <input type="text" class="form-control form-control-sm" id="patientName" maxlength="128"
                                placeholder="Nombre Completo" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patientName">País: *</label>
                            <input type="text" class="form-control form-control-sm" id="patientName" maxlength="128"
                                placeholder="Nombre Completo" value="Colombia">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patientName">No Consultante: *</label>
                            <input type="text" class="form-control form-control-sm" id="patientName" maxlength="128"
                                placeholder="Nombre Completo" value="Colombia">
                        </div>
                    </div>

                </section>
                <hr class="w-100">
                <section class="row p-1">
                    <div class="mt-1">
                        <h4>Introducción (Léala al consultante/paciente)</h4>
                        <p>
                            Gracias por aceptar esta breve entrevista sobre el alcohol, tabaco y otras drogas. <br>
                            Le voy a hacer algunas preguntas sobre su experiencia de consumo de sustancias a lo largo de
                            su vida,así como en los últimos 3 meses. Estas sustancias pueden ser fumadas, ingeridas,
                            aspiradas, inhaladas, inyectadas o tomadas en forma de pastillas o pildoras
                            (Mostrar tarjeta de drogas)
                        </p>
                        <p>
                            Algunas de las sustancias incluidas pueden haber sido recetadas por un médico
                            P.E(Pastillas adelgazantes,antidepresivos, entre otros)
                        </p>
                        <p class="text-danger">
                            Si luego hace seguimiento, compare las respuestas del consultante con las que les
                            dio en los cuestionario anteriores. Cualquier difrencia a esta pregunta debe ser explorada.
                        </p>
                    </div>
                </section>
            </section>
        </section>
        <hr />
        <section>

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Pregunta N° 1</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Pregunta N° 2</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">Pregunta N° 3</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Pregunta N° 4</button>
                    <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                        type="button" role="tab" aria-controls="v-pills-home" aria-selected="">Pregunta N°
                        5</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">Pregunta N° 6</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">Pregunta N° 7</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Pregunta N° 8</button>
                </div>
                <div class="tab-content bg-secondary w-100" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                        <div class="container-sm">
                            <h5>Pregunta N°1</h5>
                            <section>
                                <title>IMPORTANTE</title>
                                <p>
                                    Si luego hace seguimiento, compare las respuestas del consultante con las que les
                                    dio la P1 del/los cuestionarios inicial/anteriores.<br>
                                    Cualquier difrencia a esta pregunta debe ser explorada.
                                </p>
                                <section class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-1 table-bordered" id='drugsCategories'>
                                            <thead>
                                                <tr class="table text-light">
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </section>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">B</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">C</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">D</div>
                </div>
            </div>
        </section>
        <section>

        </section>
    </div>

</x-header>
