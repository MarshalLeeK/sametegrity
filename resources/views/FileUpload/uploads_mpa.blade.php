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
        




         <!-- DIV PARA AGREGAR LOS SECTION QUE CONTIENE LAS IMAGENES Y SUS DESCRIPCIONES -->



         {{-- AGREGANDO DIV PARA SECTIONS  --}}
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="col-xl-12 mt-1 mb-2">
                <div class="col-6 col-sm-12 text-center">
                    <img src="img/ApoyoMacro.jpg" alt="MACROPROCESOS DE APOYO" class="h-32 w-32 object-cover mb-2" height="500px">
                    
                </div>
            </div>

            <div class="col-12 col-sm-12 border-5 text-dark">
                <div class="col-1 col-sm-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">MACROPROCESOS DE APOYO</h1>
                </div>
                <div class="card flex-md-row mb-3 shadow-md h-md-250">
                        <p class="text-justify " style="font-size: 16px">Son aquellos procesos administrativos y operativos que no están directamente relacionados con la atención 
                            clínica de los pacientes, pero que son esenciales para el funcionamiento eficiente y efectivo de la organización. Estos macroprocesos 
                            aseguran que los servicios clínicos puedan llevarse a cabo de manera fluida y sin interrupciones.
                        </p>
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
                    
                    {{-- COMPONENTE PARA MENU DE MACROPROCESOS --}}
                    <div>
                        <x-menu-uploads-apoyo>
                        </x-menu-uploads-apoyo>
                    </div>
                    {{-- FIN COMPONENTE MENU DE MACROPROCESOS  --}}
            </div>
        </div>
    </div>
     {{-- FIN DE DIVS SECTIONS --}}

     


   
         
    </div>
</x-header>



<!-- Script para mostrar/ocultar la nueva tabla -->
<script>
    document.getElementById('toggleTableHeading').addEventListener('click', function() {
        var tableContainer = document.getElementById('newTableContainer');
        if (tableContainer.style.display === 'none') {
            tableContainer.style.display = 'block';
        } else {
            tableContainer.style.display = 'none';
        }
    });
</script>


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