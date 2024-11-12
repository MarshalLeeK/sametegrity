<x-header
hd-title="Misional"
hd-description="Módulo de Macroprocesos misionales"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="MACROPROCESOS MISIONALES"
    
    />
    <div class="container-fluid">
        <div class="col-6 col-sm-12 text-center">
            <img src="img/farmacia.jpg" alt="SERVICIO FARMACÉUTICO" class="h-32 w-32 object-cover mb-2" height="500px">
            
        </div>
  
    </div>

    {{-- AGREGANDO DIV PARA SECTIONS  --}}
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <div class="col-12 col-sm-12 border-5 text-dark">
                <div class="col-1 col-sm-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">SERVICIO FARMACÉUTICO</h1>
                </div>
                <div class="card flex-md-row mb-3 shadow-md h-md-250">
                    <p class="text-justify ">
                        El servicio farmacéutico en una institución de salud tiene como función principal gestionar de manera integral el ciclo de los medicamentos 
                        y productos terapéuticos. Este servicio abarca desde la selección y adquisición de medicamentos hasta su almacenamiento, preparación, 
                        dispensación, distribución y control de calidad. También se encarga de brindar asesoría técnica sobre el uso racional de los medicamentos 
                        a pacientes y personal médico, asegurando que estos se utilicen de manera segura y efectiva.
                        <br>
                        Dentro de sus responsabilidades destacan:
                        <br>
                        <strong> Selección de medicamentos:</strong> Identificación de los medicamentos más adecuados para tratar las patologías comunes en el centro 
                        de salud, basándose en protocolos clínicos.
                        <br>
                        <strong> Adquisición y gestión de inventario:</strong> Compra y control de stock para garantizar la disponibilidad continua de los medicamentos
                        necesarios.
                        <br>
                        <strong> Almacenamiento seguro:</strong> Uso de condiciones adecuadas para conservar los medicamentos, según sus requerimientos de temperatura 
                        y humedad.
                        <br>
                        <strong> Dispensación:</strong> Proceso mediante el cual se entregan los medicamentos prescritos a los pacientes, acompañados de instrucciones
                        claras para su correcta administración.
                        <br>
                        <strong> Atención farmacéutica:</strong> Orientación a los pacientes sobre el uso correcto de sus tratamientos, prevención de interacciones 
                        medicamentosas y seguimiento de efectos secundarios.
                        <br>
                        <strong> Farmacovigilancia:</strong> Monitoreo de los efectos de los medicamentos en los pacientes, detectando y reportando posibles reacciones 
                        adversas.
                        <br>
                        Este servicio es clave para garantizar el éxito terapéutico y la seguridad de los pacientes. </p>
                </div>
                <div class="col-xl-12 mt-1 mb-2">
                    <x-layouts.upBarUploads 
                        :rows="$uploadFiles"
                        :searchbox="$searchbox"
                        :module="$module"
                        :moduleView="$moduleView"
                    />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table text-light">
                                    <x-layouts.tables.columnsFile
                                        :columns="$columns"
                                    />
                                </tr>
                            </thead>
                            <tbody>                            
                                <x-layouts.tables.dataFile 
                                    :rows="$uploadFiles"
                                    :countcol="$columns"
                                    :module="$module"
                                    />

                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col mb-2">
                            <div class="card flex-md-row mb-3 shadow-md h-md-250">


                                {{-- ATENCION AL USUARIO --}}
                                    <div class="col-1 col-sm-6 text-center">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <h3 class="mb-0">
                                                <a class="text-dark" href="{{ route('filesMissionaryMacro') }}">ATENCION AL USUARIO</a>
                                            </h3>
                                            
                                            <div class="max-w-3xl mx-auto text-justify p-4">
                                                <p class="card-text mb-auto" style="text-align: justify">La atención al usuario es el servicio que brinda una organización para resolver dudas, recibir solicitudes o gestionar quejas de los usuarios o pacientes. 
                                                    En una clínica, este servicio se enfoca en ofrecer información, coordinar citas, orientar a los pacientes sobre los procesos y asegurar que su experiencia sea satisfactoria.</p>
                                            </div>
                                            <a href="{{ route('filesMissionaryMacro') }}">Clic para ver más</a>
                                        <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                        data-src="{{ URL::asset('img/Atencion al usuario.jpg') }}" alt="Thumbnail [160*160]"
                                        src="{{ URL::asset('img/Atencion al usuario.jpg') }}"style="width: 300px; height: 300Px;"
                                        src="{{ URL::asset('img/Atencion al usuario.jpg') }}" data-holder-rendered="true" />
                                        </div>
                                    </div>

                                        {{-- HOSPITALIZACION --}}
                                        <div class="col-1 col-sm-6 text-center">
                                            <div class="card-body d-flex flex-column align-items-start">
                                                <h3 class="mb-0">
                                                    <a class="text-dark" href="{{ route('filesConsultationExternal') }}">CONSULTA EXTERNA</a>
                                                </h3>
                                                
                                                <div class="max-w-3xl  text-justify p-4">
                                                    <p class="card-text mb-auto" style="text-align: justify">Servicio donde los pacientes reciben atención psicológica o psiquiátrica sin necesidad de ser hospitalizados. 
                                                        Aquí, los profesionales de la salud mental realizan evaluaciones, diagnósticos y tratamientos de diversos trastornos mentales, como ansiedad, 
                                                        depresión o trastornos de la personalidad. La consulta externa permite a los pacientes continuar con sus actividades diarias mientras reciben el 
                                                        apoyo necesario para su salud mental.</p>
                                                </div>
                                                <a href="{{ route('filesConsultationExternal') }}">Clic para ver más</a>
                                            <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                            data-src="{{ URL::asset('img/ConsultaExterna.jpg') }}" alt="Thumbnail [160*160]"
                                            src="{{ URL::asset('img/ConsultaExterna.jpg') }}"style="width: 300px; height: 300Px;"
                                            src="{{ URL::asset('img/ConsultaExterna.jpg') }}" data-holder-rendered="true" />
                                            </div>
                                        </div>
                            </div>


                            <div class="card flex-md-row mb-3 shadow-md h-md-250">

                                {{-- CAD --}}
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesCad') }}">CAD</a>
                                        </h3>
                                        <div class="max-w-3xl mx-auto text-justify p-4"> 
                                            <p class="card-text mb-auto" style="text-align: justify" >CAD (Centro de Atención Diurna) es una unidad que brinda atención integral a pacientes con trastornos 
                                                mentales, sin requerir hospitalización completa. Los pacientes asisten durante el día para participar en terapias psicológicas, 
                                                actividades terapéuticas y recibir apoyo médico, pero regresan a sus hogares al finalizar la jornada. 
                                                El objetivo del CAD es proporcionar un tratamiento estructurado que favorezca la rehabilitación y reintegración social del paciente, 
                                                en un entorno menos restrictivo que la hospitalización.</p>
                                        </div>
                                        <a href="{{ route('filesCad') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/CAD.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/CAD.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/CAD.jpg') }}" data-holder-rendered="true" />
                                    </div>
                                </div>

                                {{-- HOSPITALIZACIÓN--}}
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesHospitalization') }}">HOSPITALIZACIÓN</a>
                                        </h3>
                                    
                                        <div class="max-w-3xl mx-auto text-justify p-4">
                                            <p class="card-text mb-auto" style="text-align: justify">La hospitalización es el proceso de admisión de un paciente en un hospital o centro médico 
                                                para recibir tratamiento médico o quirúrgico que no puede ser proporcionado de manera ambulatoria.
                                                Esto implica que el paciente debe permanecer internado bajo cuidado médico durante un período determinado, 
                                                el cual puede variar dependiendo de la gravedad de su condición o del tipo de procedimiento que deba realizarse.</p>
                                        </div>
                                        <a href="{{ route('filesHospitalization') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/hospitalizacion.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/hospitalizacion.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/hospitalizacion.jpg') }}" data-holder-rendered="true" />
                                    </div>

                                </div>

                            </div>

                    </div>
                </div>                  
            </div>
        </div>
    </div>

</x-header>
