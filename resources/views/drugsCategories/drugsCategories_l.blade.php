<x-header 
hd-title="Categoria Drogas"
hd-description="Registro, control y mantenimiento de las categorias de dogras en el sistema"
:module="$module"
:view="$view" 
>

    <x-layouts.titleBanner 
    title-Module="CATEGORIA DROGAS"
    />
    
    <div class="container-fluid">
        <x-layouts.upBar 
         :rows="$categories"
         :searchbox="$searchbox"
         :module="$module"
        />

            <div class="col-xl-12 mt-1 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped mb-1">
                        <thead>
                            <tr class="table text-light">
                                <x-layouts.tables.columns 
                                    :columns="$columns"
                                />
                            </tr>
                        </thead>
                        <tbody>
                            <x-layouts.tables.data 
                                :rows="$categories"
                                :countcol="$columns"
                                :module="$module"
                            />
                        </tbody>
                    </table>
            </div>
    </div>
</x-header>