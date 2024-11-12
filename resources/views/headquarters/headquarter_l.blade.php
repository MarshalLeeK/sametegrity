<x-header hd-title="Sedes"
    hd-description="Sedes" :module="$module"
    :view="$view">

    <x-layouts.titleBanner title-Module="SEDES" />
    <div class="container-fluid">
        <div class="container-fluid">
            <x-layouts.upBar 
            :rows="$headquarters" 
            :searchbox="$searchbox" 
            :module="$module" 
            />
            
    
            <div class="col-xl-12 mt-1 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped mb-1 table-bordered" id='headquarters'>
                        <thead>
                            <tr class="table text-light">
                                <x-layouts.tables.columns :columns="$columns" />
                            </tr>
                        </thead>
                        <tbody>
                            <x-layouts.tables.data :rows="$headquarters" :countcol="$columns" :module="$module" />
                        </tbody>
                    </table>
                </div>
            </div>
            <script type="application/javascript" src="{{ URL::asset('js/drugsCategories.js') }}"></script>
</x-header>