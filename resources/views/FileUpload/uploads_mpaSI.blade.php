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
     
        <div class="container mx-auto my-8">
            <div class="col-xl-12 mt-1 mb-2">
                <div class="col-6 col-sm-12 text-center">
                    <img src="img/sistemas_de_informacion.jpg" alt="SISTEMAS DE INFORMACION" class="h-32 w-32 object-cover mb-2" height="500px">
                    
                </div>
            </div>

            <div class="col-1 col-sm-12 text-center">
                <h1 class="text-white" style="background-color:#0a4275">SISTEMAS DE INFORMACIÓN</h1>
            </div>

            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                <p class="text-justify ">
                    Son herramientas tecnológicas que se utilizan para gestionar y procesar datos relacionados con la atención médica y administrativa
                     de los pacientes. Estos sistemas incluyen software y plataformas que permiten almacenar, organizar y acceder a información de manera 
                     eficiente y segura.</p>
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
    
</x-header>