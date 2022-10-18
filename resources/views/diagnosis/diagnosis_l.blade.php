<x-header 
hd-title="Diagnósticos"
hd-description="Módulo de diagnósticos">

    <x-layouts.titleBanner 
    title-Module="DIAGNÓSTICOS"
    />
    <div class="container-fluid">
        <x-layouts.upBar 
         :rows="$diagnosis"
         :searchbox="$searchbox"
         module="diagnosis"
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
                                :rows="$diagnosis"
                                :countcol="$columns"
                                module="diagnosis"
                            />
                        </tbody>
                    </table>
            </div>
    </div>
</x-header>