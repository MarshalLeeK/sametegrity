<x-header hd-title="Grupos"
    hd-description="Grupos" :module="$module"
    :view="$view">

    <x-layouts.titleBanner title-Module="GRUPOS" />
    <div class="container-fluid">
        <div class="container-fluid">
            <x-layouts.upBar 
            :rows="$groups" 
            :searchbox="$searchbox" 
            :module="$module" 
            />
            
    
            <div class="col-xl-12 mt-1 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped mb-1 table-bordered" id='groups'>
                        <thead>
                            <tr class="table text-light">
                                <x-layouts.tables.columns :columns="$columns" />
                            </tr>
                        </thead>
                        <tbody>
                            <x-layouts.tables.data :rows="$groups" :countcol="$columns" :module="$module" />
                        </tbody>
                    </table>
                </div>
            </div>
            <script type="application/javascript" src="{{ URL::asset('js/drugsCategories.js') }}"></script>
</x-header>