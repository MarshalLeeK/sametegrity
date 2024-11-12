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
                    <img src="img/infraestructura_y_dotacion.jpg" alt="GESTION DE INFRAESTRUCTURA Y DOTACION" class="h-32 w-32 object-cover mb-2" height="500px">
                    
                </div>
             </div>




         <!-- DIV PARA AGREGAR LOS SECTION QUE CONTIENE LAS IMAGENES Y SUS DESCRIPCIONES -->



         {{-- AGREGANDO DIV PARA SECTIONS  --}}
        <div class="container mx-auto my-8">

            <div class="col-1 col-sm-12 text-center">
                <h1 class="text-white" style="background-color:#0a4275">GESTIÒN DE INFRAESTRUCTURA Y DOTACIÒN</h1>
            </div>
            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                <p class="text-justify ">
                    Se refiere a la planificación, mantenimiento y mejora de los recursos físicos y tecnológicos necesarios para el funcionamiento eficiente y 
                    seguro de la clínica. Esto incluye la gestión de los edificios y espacios clínicos, el mobiliario, el equipo médico y tecnológico, así como 
                    la dotación de materiales y suministros necesarios para el tratamiento y el cuidado de los pacientes. Además, se asegura de que todas las 
                    instalaciones cumplan con las normativas de salud, seguridad y accesibilidad. La gestión efectiva de la infraestructura y la dotación es 
                    crucial para proporcionar un entorno adecuado y seguro tanto para los pacientes como para el personal.</p>
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
            <x-menu-uploads-apoyo>
            </x-menu-uploads-apoyo>
       </div> --}}
       {{-- FIN COMPONENTE MENU DE MACROPROCESOS  --}}

         
    </div>
</x-header>