<div>
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

     <div class="col-12 col-sm-12 border-5 text-dark">
        <div class="col-1 col-sm-12 text-center">
            <h1 class="text-white" style="background-color:#0a4275">GESTION DE MACROPROCESOS</h1>
           </div>
           <div class="card flex-md-row mb-3 shadow-md h-md-250">
            <p class="text-justify ">Abarcan tanto los procesos principales relacionados directamente con la atención al paciente 
                como los procesos de apoyo que facilitan el funcionamiento eficiente y eficaz de la clínica. 
                Aquí se presentan los principales macroprocesos:<br><br>
    
                <strong> Consulta Externa:</strong> Evaluación y tratamiento de pacientes ambulatorios.<br>
                
                <strong> Hospitalización:</strong> Atención y tratamiento de pacientes que requieren internación..<br>
                
                <strong> Centro de Atención Diurna :</strong>Provisión de servicios terapéuticos y de apoyo durante el día sin necesidad de hospitalización.<br>
                
                <strong>Servicio Farmacéutico: </strong> Gestión de medicamentos y suministros relacionados.<br>
               
                Una atención al cliente eficaz contribuye a una experiencia positiva para los pacientes, mejora la satisfacción general y fortalece la relación entre la clínica y sus usuarios.</p>
               
           </div>
         
            <div class="row">
                <div class="col mb-2">
                        <div class="card flex-md-row mb-3 shadow-md h-md-250">


                            {{-- CONSULTA EXTERNA --}}
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesMissionaryMacro') }}">MACROPROCESO MISIONAL</a>
                                        </h3>
                                        
                                        <div class="max-w-3xl mx-auto text-justify p-4">
                                            <p class="card-text mb-auto" style="text-align: justify">Se refiere a los procesos clave que están directamente relacionados con la 
                                                prestación de servicios de salud mental a los pacientes. Estos procesos son el núcleo de la operación 
                                                de la clínica y están diseñados para cumplir con la misión principal de la organización, que es proporcionar 
                                                atención y tratamiento de alta calidad a los individuos que necesitan servicios de salud mental. </p>
                                        </div>
                                        <a href="{{ route('filesMissionaryMacro') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/Misional.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/Misional.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/Misional.jpg') }}" data-holder-rendered="true" />
                                    </div>
                                    
                                
                                </div>

                                    <div class="col-1 col-sm-6 text-center">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <h3 class="mb-0">
                                                <a class="text-dark" href="{{ route('filesStrategicMacro') }}">MACROPROCESO ESTRATEGICO</a>
                                            </h3>
                                            
                                            <div class="max-w-3xl  text-justify p-4">
                                                <p class="card-text mb-auto" style="text-align: justify">Son aquellos procesos que permiten definir, planificar y dirigir las acciones a 
                                                    largo plazo de la organización. Estos procesos son esenciales para establecer la visión, misión y objetivos 
                                                    estratégicos, así como para asegurar que la clínica se mantenga alineada con sus metas y responda eficazmente a los 
                                                    cambios en el entorno.</p>
                                            </div>
                                            <a href="{{ route('filesStrategicMacro') }}">Clic para ver más</a>
                                        <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                        data-src="{{ URL::asset('img/Estrategico.jpg') }}" alt="Thumbnail [160*160]"
                                        src="{{ URL::asset('img/Estrategico.jpg') }}"style="width: 300px; height: 300Px;"
                                        src="{{ URL::asset('img/Estrategico.jpg') }}" data-holder-rendered="true" />
                                        </div>
                                        
                                    </div>
                        </div>
                </div>

                <div class="col mb-2">

                            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesAssessmentMacro') }}">MACROPROCESO DE EVALUACION</a>
                                        </h3>
                                        <div class="max-w-3xl mx-auto text-justify p-4">
                                        <p class="card-text mb-auto" style="text-align: justify">Se refiere a los procesos sistemáticos y estructurados para medir, analizar y mejorar la efectividad 
                                            de los servicios prestados, la satisfacción de los pacientes, la eficiencia operativa y el cumplimiento de estándares y regulaciones.<br>
                                            Este macroproceso es crucial para asegurar que la clínica opere de manera óptima y cumpla con sus objetivos de calidad y excelencia en la atención.</p>
                                        </div>
                                        <a href="{{ route('filesAssessmentMacro') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/Evaluacion.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/Evaluacion.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/Evaluacion.jpg') }}" data-holder-rendered="true" />
                                    </div>
                                    
                                </div>

                                {{-- SERVICIO FARMACEUTICO --}}
                                <div class="col-1 col-sm-6 text-center">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{ route('filesSupportMacro') }}">MACROPROCESO DE APOYO</a>
                                        </h3>
                                    
                                        <div class="max-w-3xl mx-auto text-justify p-4">
                                            <p class="card-text mb-auto" style="text-align: justify">Son procesos que no están directamente relacionados con la atención 
                                                clínica de los pacientes, pero son esenciales para el funcionamiento eficiente y eficaz de la organización.
                                            </p>
                                        </div>
                                        <a href="{{ route('filesSupportMacro') }}">Clic para ver más</a>
                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                    data-src="{{ URL::asset('img/Apoyo.jpg') }}" alt="Thumbnail [160*160]"
                                    src="{{ URL::asset('img/Apoyo.jpg') }}"style="width: 300px; height: 300Px;"
                                    src="{{ URL::asset('img/Apoyo.jpg') }}" data-holder-rendered="true" />
                                    </div>
                                
                                </div>

                            </div>
                </div>

                
            </div>                  
        </div>
        </div>
    </div>
</div>