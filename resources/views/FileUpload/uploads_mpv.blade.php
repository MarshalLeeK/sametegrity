<x-header
hd-title="Misional"
hd-description="Módulo de Macroprocesos de evaluación"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="MACROPROCESOS DE EVALUACIÓN"
    />
    <div class="container-fluid">
        
        {{-- DIV PARA AGREGAR GESTION DE CALIDAD CON IMAGEN  --}}
        <div class="col-6 col-sm-12 text-center">
            <img src="img/gestion_calidad.jpg" alt="GESTION DE LA CALIDAD" class="h-32 w-32 object-cover mb-2" height="500px">
            
        </div>
         <!-- Nuevo div con h1 para desplegar la tabla -->
         <div class="container mx-auto my-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!--------------Usando H1 para mostrar una tabla nueva-------------->

                <div class="col-1 col-sm-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">GESTION DE LA CALIDAD</h1>
                   </div>

                   <div class="card flex-md-row mb-3 shadow-md h-md-250">
                    <p class="text-justify "> Es un enfoque sistemático y continuo para asegurar que los servicios prestados cumplen con los estándares 
                        más altos de excelencia y seguridad. Este proceso implica la planificación, control, aseguramiento y mejora de la calidad en todas las áreas de la clínica.
                        A continuación se describen los componentes clave de la gestión de la calidad: <br><br>
                        <strong>Planificación de la calidad:</strong>Establecer objetivos de calidad y especificar los procesos y recursos necesarios para alcanzarlos.<br>
                        <strong>Control de calidad:</strong>Monitorear y medir los procesos y resultados para asegurarse de que cumplen con los estándares establecidos.<br>
                        <strong>Aseguramiento de la calidad:</strong>Implementar sistemas y procedimientos para garantizar que los estándares de calidad se mantengan en todo momento.<br>
                        <strong>Mejora continua de la calidad:</strong>Identificar áreas de mejora y aplicar cambios para aumentar la eficiencia y efectividad de los servicios.<br>

                    </p>
                       
                   </div>


                <div class="col-xl-12 mt-2 mb-2">
                
    
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
                    
            
                </div>
            </div>
        </div>

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


