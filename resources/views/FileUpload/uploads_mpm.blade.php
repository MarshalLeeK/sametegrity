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
            <img src="img/Atencion al usuario.jpg" alt="ATENCIÒN AL USUARIO" class="h-32 w-32 object-cover mb-2" height="500px">
            
        </div>

        
    </div>

    {{-- AGREGANDO DIV PARA SECTIONS  --}}
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

     <div class="col-12 col-sm-12 border-5 text-dark">
        <div class="col-1 col-sm-12 text-center">
            <h1 class="text-white" style="background-color:#0a4275">ATENCION AL USUARIO</h1>
           </div>
           <div class="card flex-md-row mb-3 shadow-md h-md-250">
            <p class="text-justify ">Se refiere a la manera en que se gestionan las interacciones y el servicio brindado a los pacientes y sus familiares. 
                Esto incluye:<br><br>
    
                <strong> Recepción y bienvenida:</strong> La primera impresión que los pacientes tienen de la clínica, incluyendo el proceso de admisión, la gestión de citas y la respuesta a consultas iniciales.<br>
                
                <strong> Comunicación efectiva:</strong> Proporcionar información clara y útil sobre los servicios de la clínica, los procedimientos, y las opciones de tratamiento. También implica escuchar y responder a las preocupaciones y preguntas de los pacientes de manera empática y profesional.<br>
                
                <strong> Gestión de quejas y sugerencias:</strong> Manejo de cualquier queja o problema que los pacientes puedan tener, buscando resolverlos de manera rápida y eficaz. La atención al cliente también puede incluir la recopilación de sugerencias para mejorar el servicio.<br>
                
                <strong>Seguimiento: </strong> con los pacientes para asegurar que estén satisfechos con el tratamiento y la atención recibida, y para resolver cualquier duda o problema que pueda surgir después de las consultas o tratamientos.<br>
                
                <strong> Empatía y apoyo:</strong> Ofrecer apoyo emocional y comprensión, considerando que los pacientes pueden estar pasando por momentos difíciles debido a su salud mental.<br><br>
                
                Una atención al cliente eficaz contribuye a una experiencia positiva para los pacientes, mejora la satisfacción general y fortalece la relación entre la clínica y sus usuarios.</p>
               
           </div>

           <x-layouts.upBarUploads 
                        :rows="$uploadFiles"
                        :searchbox="$searchbox"
                        :module="$module"
                        :moduleView="$moduleView"
            />
            <div class="col-xl-12 mt-1 mb-2">
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


                        {{-- CONSULTA EXTERNA --}}
                            <div class="col-1 col-sm-6 text-center">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="{{ route('filesConsultationExternal') }}">CONSULTA EXTERNA</a>
                                    </h3>
                                    
                                    <div class="max-w-3xl mx-auto text-justify p-4">
                                        <p class="card-text mb-auto" style="text-align: justify">Servicio donde los pacientes reciben atención psicológica o psiquiátrica 
                                            sin necesidad de ser hospitalizados. Aquí, los profesionales de la salud mental realizan evaluaciones, 
                                            diagnósticos y tratamientos de diversos trastornos mentales, como ansiedad, depresión o trastornos de la personalidad. 
                                            La consulta externa permite a los pacientes continuar con sus actividades diarias mientras reciben el apoyo necesario 
                                            para su salud mental.</p>
                                    </div>
                                    <a href="{{ route('filesConsultationExternal') }}">Clic para ver más</a>
                                <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                data-src="{{ URL::asset('img/ConsultaExterna.jpg') }}" alt="Thumbnail [160*160]"
                                src="{{ URL::asset('img/ConsultaExterna.jpg') }}"style="width: 300px; height: 300Px;"
                                src="{{ URL::asset('img/ConsultaExterna.jpg') }}" data-holder-rendered="true" />
                                </div>
                            
                            </div>

                                {{-- HOSPITALIZACION --}}
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesHospitalization') }}">HOSPITALIZACION</a>
                                        </h3>
                                        
                                        <div class="max-w-3xl  text-justify p-4">
                                            <p class="card-text mb-auto" style="text-align: justify">Admisión de un paciente para recibir tratamiento intensivo y supervisado 
                                                dentro de las instalaciones de la clínica. Esto ocurre cuando una persona necesita un nivel de atención 
                                                que no puede ser proporcionado de manera segura o efectiva en un entorno ambulatorio, como en casos de 
                                                crisis agudas, riesgo de autolesiones, o necesidad de estabilización de síntomas graves. Durante la hospitalización,
                                                 los pacientes reciben atención continua y multidisciplinaria, que puede incluir terapia, medicación, 
                                                 y otros tratamientos específicos</p>
                                        </div>
                                        <a href="{{ route('filesHospitalization') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/hospitalizacion.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/hospitalizacion.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/hospitalizacion.jpg') }}" data-holder-rendered="true" />
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
                               
                                <p class="card-text mb-auto" style="text-align: justify">Es una unidad que brinda atención integral a pacientes con trastornos mentales, sin requerir hospitalización completa. 
                                    Los pacientes asisten durante el día para participar en terapias psicológicas, actividades terapéuticas y recibir apoyo médico, 
                                    pero regresan a sus hogares al finalizar la jornada. El objetivo del CAD es proporcionar un tratamiento estructurado que favorezca la 
                                    rehabilitación y reintegración social del paciente, en un entorno menos restrictivo que la hospitalización.</p>
                                <a href="{{ route('filesCad') }}">Clic para ver más</a>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                            data-src="{{ URL::asset('img/CAD.jpg') }}" alt="Thumbnail [160*160]"
                            src="{{ URL::asset('img/CAD.jpg') }}"style="width: 300px; height: 300Px;"
                            src="{{ URL::asset('img/CAD.jpg') }}" data-holder-rendered="true" />
                            </div>
                          
                        </div>

                         {{-- SERVICIO FARMACEUTICO --}}
                         <div class="col-1 col-sm-6 text-center">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0">
                                    <a class="text-dark" href="{{ route('filesPharmaceutical') }}">SERVICIO FARMACÉUTICO</a>
                                </h3>
                              
                                <div class="max-w-3xl mx-auto text-justify p-4">
                                    <p class="card-text mb-auto" style="text-align: justify">Se encarga de la gestión, dispensación y supervisión de medicamentos específicos 
                                    para tratar trastornos mentales. Este servicio incluye la provisión de medicamentos recetados por psiquiatras o médicos, 
                                    así como la asesoría a los pacientes sobre el uso correcto de los mismos, posibles efectos secundarios y la importancia de 
                                    seguir el tratamiento. Los farmacéuticos también pueden colaborar con otros profesionales de la salud para monitorear la 
                                    eficacia del tratamiento y hacer ajustes si es necesario.</p>
                                </div>
                                        <a href="{{ route('filesPharmaceutical') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/farmacia.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/farmacia.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/farmacia.jpg') }}" data-holder-rendered="true" />
                            </div>
                         </div>

                    </div>
            </div>
          </div>                  
        </div>
        </div>
    </div>

</x-header>



<!-- Script para mostrar/ocultar la imagen de macroprocesos -->
<script>
    document.getElementById('toggleTableHeading1').addEventListener('click', function() {
        var tableContainer = document.getElementById('newTableContainer1');
        if (tableContainer.style.display === 'none') {
            tableContainer.style.display = 'block';
        } else {
            tableContainer.style.display = 'none';
        }
    });
</script>