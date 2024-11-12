<x-header
hd-title="Misional"
hd-description="Módulo de Macroprocesos de apoyo"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="MACROPROCESOS DE APOYO"
    />
    <div class="container-fluid">
       
            <div class="col-xl-12 mt-1 mb-2">
                <div class="col-6 col-sm-12 text-center">
                    <img src="img/FinancieraGes.jpg" alt="GESTION FINANCIERA" class="h-32 w-32 object-cover mb-2" height="500px">
                    
                </div>
            </div>


        <div class="container mx-auto my-8">

            <div class="col-1 col-sm-12 text-center">
                <h1 class="text-white" style="background-color:#0a4275">GESTIÒN FINANCIERA</h1>
            </div>
                <div class="card flex-md-row mb-3 shadow-md h-md-250">
                    <p class="text-justify ">
                    Se refiere al conjunto de procesos y prácticas implementados para asegurar que los servicios ofrecidos cumplen con estándares de excelencia y 
                    seguridad. Esto incluye la evaluación y mejora continua de los procedimientos clínicos, la atención al paciente, y la administración de la clínica. 
                    La gestión de la calidad abarca aspectos como la capacitación del personal, la satisfacción del paciente, el cumplimiento de normativas y 
                    regulaciones, y la implementación de estrategias para mejorar los resultados clínicos y la experiencia del paciente. Su objetivo es garantizar que 
                    los servicios sean eficaces, eficientes y centrados en el paciente. </p>
                </div>

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
    </div>
     {{-- FIN DE DIVS SECTIONS --}}

    </div>
</x-header>



