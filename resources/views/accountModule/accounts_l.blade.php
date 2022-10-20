<x-header
hd-title="Usuarios"
hd-description="Módulo de Usuarios"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="USUARIOS"
    />
    
    <div class="container-fluid">
        <x-layouts.upBar 
         :rows="$accounts"
         :searchbox="$searchbox"
         :module="$module"
        />
            <div class="col-xl-12 mt-1 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table text-light">
                                <x-layouts.tables.columns
                                    :columns="$columns"
                                />
                            </tr>
                        </thead>
                        <tbody>
                            <x-layouts.tables.data 
                                :rows="$accounts"
                                :countcol="$columns"
                                module="account"
                                />
                        </tbody>
                    </table>
            </div>
        </div>
</x-header>