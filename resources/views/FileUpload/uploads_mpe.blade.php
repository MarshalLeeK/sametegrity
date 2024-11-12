<x-header
hd-title="Misional"
hd-description="Módulo de Macroprocesos estrategicos"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="MACROPROCESOS ESTRATEGICOS"
    />
    <div class="container-fluid">
        
           


        
        <div class="col-6 col-sm-12 text-center">
            <img src="img/direccionamiento_estrategico.jpg" alt="DIRECCIONAMIENTO ESTRATEGICO" class="h-32 w-32 object-cover mb-2" height="500px">
            
        </div>

    

        <!-- Nuevo div con h1 para desplegar la tabla -->
        <div class="container mx-auto my-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            

            <!-- Section 1 -->
            <section class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
    
                <div class="col-1 col-sm-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">DIRECCIONAMIENTO ESTRATEGICO</h1>
                   </div>
                <div class="card flex-md-row mb-3 shadow-md h-md-250">
                    <p class="text-justify ">Se refiere al proceso de definir la visión, misión, objetivos y estrategias que guiarán a la organización hacia el logro de sus metas 
                        a largo plazo. Este proceso implica la planificación y toma de decisiones clave para asegurar que la clínica opere de manera eficiente, 
                        efectiva y sostenible. </p>
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
            </section>
             <div>

                {{-- <x-menu-uploads
                />
                 --}}
             </div>





             {{-- ESTE DIV PERMITE DESPLEGAR CONTENIDO CON LA FUNCION DE JAVASCRIPT USADA AL FINAL --}}
            {{-- <div class="table-responsive mt-2" id="newTableContainer" style="display: none;">

              </div> --}}
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


