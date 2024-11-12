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
    
         {{-- AGREGANDO DIV PARA SECTIONS  --}}
        <div class="container mx-auto my-8">

            <div class="col-xl-12 mt-1 mb-2">
                <div class="col-6 col-sm-12 text-center">
                    <img src="img/TalentoHum.jpg" alt="TALENTO HUMANO" class="h-32 w-32 object-cover mb-2" height="500px">
                    
                </div>
           </div>

            <div class="col-1 col-sm-12 text-center">
                <h1 class="text-white" style="background-color:#0a4275">TALENTO HUMANO</h1>
            </div>

            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                <p class="text-justify ">
                    Se refiere a la gestión de los recursos humanos, es decir, el personal que trabaja en la clínica. Esto incluye la selección, contratación, 
                    formación y desarrollo de profesionales como psiquiatras, psicólogos, enfermeros, trabajadores sociales, y personal administrativo, 
                    entre otros. La gestión del talento humano se enfoca en asegurar que el personal esté bien capacitado y motivado, y que se sienta valorado 
                    en su trabajo. También abarca la planificación de recursos para garantizar que haya suficiente personal disponible para atender a los 
                    pacientes, la evaluación del desempeño, y el desarrollo de planes de carrera y bienestar para los empleados. El objetivo es crear un equipo 
                    de trabajo competente y comprometido, que pueda ofrecer un servicio de alta calidad y centrado en el paciente.</p>
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


     {{-- COMPONENTE PARA MENU DE MACROPROCESOS --}}
     {{-- <div>
        <x-menu-uploads>
        </x-menu-uploads>
       </div> --}}
       {{-- FIN COMPONENTE MENU DE MACROPROCESOS  --}}

         
    </div>
</x-header>