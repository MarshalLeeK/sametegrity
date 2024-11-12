<x-header
hd-title="Documentos"
hd-description="Módulo de Documentos"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="ARCHIVOS CARGADOS"
    />
    <div class="container-fluid">
        <x-layouts.upBarFile 
         :rows="$uploadFiles"
         :searchbox="$searchbox"
         :module="$module"
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

    </div>
</x-header>